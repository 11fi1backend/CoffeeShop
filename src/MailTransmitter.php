<?php

class MailTransmitter
{
    /**
     * @var Mail
     */
    private $mail;

    /**
     * @param Mail $mail
     */
    public function __construct(Mail $mail)
    {
        $this->mail = $mail;
    }

    /**
     * @return bool
     */
    public function sendEmail()
    {
        $header = sprintf(
            'From: %s' . "\r\n" .
            'Reply-To: webmaster@example.com' . "\r\n" .
            'X-Mailer: PHP/%s',
            $this->mail->getSenderMail(),
            phpversion()
        );

        return mail(
            $this->mail->getDestinationMail(),
            $this->mail->getSubject(),
            $this->mail->getMessage(),
            $header
        );
    }
}