<?php

namespace lib;

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
     * @param \PDF $pdfFile
     */
    public function __construct($senderMail, $destinationMail, $subject, $message, \PDF $pdfFile = null)
    {
        $this->ensureEmailIsValid($senderMail);
        $this->ensureEmailIsValid($destinationMail);
        $this->ensureMailTextIsValid($subject, $message);

        $this->senderMail = $senderMail;
        $this->destinationMail = $destinationMail;
        $this->pdfFile = $pdfFile;
        $this->subject = $subject;
        $this->message = $message;
    }

    /**
     * @param $mail
     */
    private function ensureEmailIsValid($mail)
    {
        if (filter_var($mail, FILTER_VALIDATE_EMAIL))
        {
            throw new \InvalidArgumentException(sprintf("Given mail is not a valid email (%s)", $mail));
        }
    }

    /**
     * @param $subject
     * @param $message
     * @throws \InvalidArgumentException
     */
    private function ensureMailTextIsValid($subject, $message)
    {
        if (!is_string($subject))
        {
            throw new \InvalidArgumentException("Given subject has to be a string");
        }

        if (!is_string($message))
        {
            throw new \InvalidArgumentException("Given message has to be a string");
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
     * @return \PDF
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