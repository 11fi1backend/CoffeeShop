<?php

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
     * @param $senderMail
     * @param $destinationMail
     * @param string $subject
     * @param string $message
     */
    public function __construct(EmailAddress $senderMail, EmailAddress $destinationMail, $subject, $message)
    {
        $this->ensureMailTextIsValid($subject, $message);

        $this->senderMail = $senderMail;
        $this->destinationMail = $destinationMail;
        $this->subject = $subject;
        $this->message = $message;
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