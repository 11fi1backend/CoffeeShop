<?php

use lib as library;

class Factory
{
    // TODO: initialize MailTransmitter and interaction with application

    public function __construct()
    {
        $test = new library\Mail("", "", "", "", new PDF());
    }
}