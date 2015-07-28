<?php

class TemplateEngine
{
    /**
     * @var string
     */
    private $templatePath;

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

        $this->templatePath = $templatePath;
        $this->templateOutputPath = $templateOutputPath;
    }

    /**
     * @param $filePath
     */
    private function ensureFileExists($filePath)
    {
        if (!file_exists($filePath)) {
            throw new \InvalidArgumentException(sprintf('Given file could not be found. Pls check the given path (%s)', $filePath));
            #'
        }
    }

    /**
     * @param array $parameters
     * @return bool
     */
    public function render(array $parameters)
    {
        // read template file from path
        $templateFileContent = file_get_contents($this->templatePath);

        try {
            foreach($parameters as $parameter => $value) {
                // replace given parameter with given value
                $templateFileContent = str_replace($parameter, $value, $templateFileContent);
            }

            // write into new file for PDF Output
            file_put_contents($this->templateOutputPath, $templateFileContent);

			self::ensureFileExists($this->templateOutputPath);

			$this->templateOutputPath = substr($this->templateOutputPath, 6);
			
			// Shell Command for generating the invoice with FOP
			// Execute Windows Batchfile 
			#system('cmd /c C:\xampp\htdocs\CoffeeShop\src\template\fop.bat 2>&1');
			
			// Execute Linux Shellscript
			$PDF = 'Rechnung_RECHNR.pdf';
			echo $this->templateOutputPath;
			echo $PDF;
			
			$output = shell_exec(sprintf('./etc/coffeeshop/src/lib/fop.sh %s $PDF 2>&1', $this->templateOutputPath));

			echo $output;

            return true;
        } catch (\RuntimeException $e) {

            $cfg = Factory::getFactory()->getConfig();
            $adminEmailAddress = $cfg->getAdminEmailAddress();

            MailTransmitter::sendEmail(
                new Mail(
                    $adminEmailAddress,
                    $adminEmailAddress,
                    'Coffeeshop - Error in Backend',
                    sprintf(
                        'Could not create template (%s). \n Please check Exception: %s',
                        $this->templatePath,
                        $e
                    )
                )
            );

            return false;
        }
    }
}