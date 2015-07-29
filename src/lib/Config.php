<?php

class Config
{
    /**
     * @var array
     */
    private $file;

    public function __construct($configFile)
    {
        self::ensureFileExists($configFile);

        $this->file = parse_ini_file($configFile);
    }

    /**
     * @param $filePath
     */
    private function ensureFileExists($filePath)
    {
        if (!file_exists($filePath)) {
            throw new \InvalidArgumentException(sprintf('Given config file could not be found. Pls check the given path (%s)', $filePath));
        }
    }

    /**
     * @return string
     */
    public function getDbHostIP()
    {
        return $this->file['hostIP'];
    }

    /**
     * @return string
     */
    public function getDbUsername()
    {
        return $this->file['userName'];
    }

    /**
     * @return string
     */
    public function getDbName()
    {
        return $this->file['databaseName'];
    }

    /**
     * @return string
     */
    public function getDbPassword()
    {
        return $this->file['password'];
    }

    /**
     * @return EmailAddress
     */
    public function getAdminEmailAddress()
    {
        return new EmailAddress($this->file['adminEmailAddress']);
    }
}