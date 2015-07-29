<?php

class Factory
{
    /**
     * @var Factory
     */
    private static $factory;

    /**
     * @var DataBaseConnection
     */
    private $databaseConnection = null;

    /**
     * @var Config
     */
    private $config = null;

    /**
     * @return Factory
     */
    public static function getFactory()
    {
        if (!self::$factory) {
            self::$factory = new self();
        }

        return self::$factory;
    }

    private function __construct()
    {
        // private constructor prevents the normal initialization to a factory object
        // so in this case "$factory = new Factory();" does not work
        // use instead getFactory Method
    }

    /**
     * @return Config
     */
    public function getConfig()
    {
        if ($this->config == null) {
            $this->config = new Config("./config.ini");
        }

        return $this->config;
    }

    /**
     * @return DataBaseConnection
     */
    public function getConnection()
    {
        if ($this->databaseConnection == null) {

            $config = self::getConfig();

            $this->databaseConnection = new DataBaseConnection(
                $config->getDbHostIP(),
                $config->getDbName(),
                $config->getDbUsername(),
                $config->getDbPassword()
            );
        }

        return $this->databaseConnection;
    }
}




