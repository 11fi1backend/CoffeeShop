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
     * @var string
     */
    private $subject;

    /**
     * @var string
     */
    private $message;

    /**
     * @var PDF
     */
    private $pdfFile;

    /**
     * @param $senderMail
     * @param $destinationMail
     * @param string $subject
     * @param string $message
     * @param PDF $pdfFile
     */
    public function __construct($senderMail, $destinationMail, $subject, $message, PDF $pdfFile)
    {
        $this->ensureEmailsAreValid($senderMail, $destinationMail);
        $this->ensureMailTextIsValid($subject, $message);

        $this->senderMail = $senderMail;
        $this->destinationMail = $destinationMail;
        $this->pdfFile = $pdfFile;
        $this->subject = $subject;
        $this->message = $message;
    }

    /**
     * @param $senderMail
     * @param $destinationMail
     */
    private function ensureEmailsAreValid($senderMail, $destinationMail)
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

    /**
     * @param $subject
     * @param $message
     */
    private function ensureMailTextIsValid($subject, $message)
    {
        if (!is_string($subject))
        {
            throw new InvalidArgumentException("Given subject has to be a string");
        }

        if (!is_string($message))
        {
            throw new InvalidArgumentException("Given message has to be a string");
        }
    }

    /**
     * @return string
     */
    public function getSenderMail()
    {
        return $this->senderMail;
    }

    /**
     * @return string
     */
    public function getDestinationMail()
    {
        return $this->destinationMail;
    }

    /**
     * @return PDF
     */
    public function getPdfFile()
    {
        return $this->pdfFile;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
}