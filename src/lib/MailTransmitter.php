<?php

abstract class MailTransmitter
{
    /**
     * @param Mail $mail
     * @return bool
     */
    public static function sendEmail(Mail $mail)
    {
        $header = sprintf(
            'From: %s' . "\r\n" .
            'Reply-To: webmaster@example.com' . "\r\n" .
            'X-Mailer: PHP/%s',
            $mail->getSenderMail(),
            phpversion()
        );

        return mail(
            $mail->getDestinationMail(),
            $mail->getSubject(),
            $mail->getMessage(),
            $header
        );
    }
}