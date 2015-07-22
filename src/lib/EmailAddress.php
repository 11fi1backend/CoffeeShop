<?php

namespace lib;

class EmailAddress
{
    /**
     * @var string
     */
    private $mail;

    /**
     * @param $mail string
     */
    public function __construct($mail)
    {
        $this->ensureEmailIsValid($mail);
        $this->mail = $mail;
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
     * @return string
     */
    public function __toString()
    {
        return $this->mail;
    }
}