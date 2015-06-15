<?php

/**
 * Class Mail - ValueObject
 */
class Mail
{
    /**
     * @var string
     */
    private $senderMail;

    /**
     * @var string
     */
    private $destinationMail;

    /**
     * @var PDF
     */
    private $pdfFile;

    /**
     * @param $senderMail
     * @param $destinationMail
     * @param PDF $pdfFile
     */
    public function __construct($senderMail, $destinationMail, PDF $pdfFile)
    {
        $this->ensureEmailAreValid($senderMail, $destinationMail);

        $this->senderMail = $senderMail;
        $this->destinationMail = $destinationMail;
        $this->pdfFile = $pdfFile;
    }

    /**
     * @param $senderMail
     * @param $destinationMail
     */
    private function ensureEmailAreValid($senderMail, $destinationMail)
    {
        if (filter_var($senderMail, FILTER_VALIDATE_EMAIL))
        {
            throw new InvalidArgumentException("Given senderMail is not a valid email");
        }

        if (filter_var($destinationMail, FILTER_VALIDATE_EMAIL))
        {
            throw new InvalidArgumentException("Given destinationMail is not a valid email");
        }
    }
}