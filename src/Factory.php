<?php

class Factory
{
    /**
     * @var \lib\DataBaseConnection
     */
    private $databaseConnection;

    /**
     * @return \lib\DataBaseConnection
     */
    public function getDataBase()
    {
        if ($this->databaseConnection == null) {

            // TODO: add real loginDatas
            $this->databaseConnection = new \lib\DataBaseConnection("HOST", "DBNAME", "USERNAME", "STRING");
        }

        return $this->databaseConnection;
    }
}