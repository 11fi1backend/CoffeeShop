<?php

namespace lib;

class TemplateEngine
{
    /**
     * @var string
     */
    private $filePath;

    /**
     * @param $filePath
     */
    public function __construct($filePath)
    {
        self::ensureFileExists($filePath);

        $this->filePath = $filePath;
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
        $doc = new \DOMDocument();
        $doc->load($this->filePath);

        try {
            foreach($parameters as $parameter => $value) {
                $elements = $doc->getElementsByTagName($parameter);

                for ($var = 0; $var <= $elements->length; $var++) {
                    $elements->item($var)->nodeValue = $value;
                }
            }

            $doc->saveXML();
        } catch (\RuntimeException $e) {
            MailTransmitter::sendEmail(
                new Mail(
                    'coffeeshop.backend@klara-oppenheimer-schule.de',
                    'admin@klara-oppenheimer-schule.de',
                    'Coffeeshop - Error in Backend',
                    sprintf(
                        'Could not create PDF File with template (%s). Please check Exception: %s',
                        $this->filePath,
                        $e
                    )
                )
            );
        }
    }
}