<?php

namespace lib;

class TemplateEngine
{
    /**
     * @var string
     */
    private $filePath;

    /**
     * @var string
     */
    private $templateOutputPath;

    /**
     * @param $templatePath
     * @param $templateOutputPath
     */
    public function __construct($templatePath, $templateOutputPath)
    {
        self::ensureFileExists($templatePath);
        self::ensureFileExists($templateOutputPath);

        $this->filePath = $templatePath;
        $this->templateOutputPath = $templateOutputPath;
    }

    /**
     * @param $filePath
     */
    private function ensureFileExists($filePath)
    {
        if (!file_exists($filePath)) {
            throw new \InvalidArgumentException(sprintf('Given file could not be found. Pls check the given path (%s)', $filePath));
        }
    }

    public function render(array $parameters)
    {
        // read template file from path
        $templateFileContent = file_get_contents($this->filePath);

        try {
            foreach($parameters as $parameter => $value) {
                // replace given parameter with given value
                $templateFileContent = str_replace("$parameter", "$value", $templateFileContent);
            }

            // write into new file for PDF Output
            file_put_contents($this->templateOutputPath, $templateFileContent);

            // TODO: add ShellCommands for FOB Call
			$INVOICE_NR="%RECHNUNGS_ID%";
            
            echo shell_exec('java -jar /etc/coffeeshop/fop-2.0/build/fop.jar -fo escapeshellarg($this->templateOutputPath) -pdf /etc/coffeeshop/invoice/pdf/Rechnung_'.escapeshellarg($INVOICE_NR).".pdf");

        } catch (\RuntimeException $e) {
            MailTransmitter::sendEmail(
                new Mail(
                    'coffeeshop.backend@klara-oppenheimer-schule.de',
                    'admin@klara-oppenheimer-schule.de',
                    'Coffeeshop - Error in Backend',
                    sprintf(
                        'Could not create template (%s). \n Please check Exception: %s',
                        $this->filePath,
                        $e
                    )
                )
            );
        }
    }
}