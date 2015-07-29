<?php

class DataBaseConnection
{
    /**
     * @var resource
     */
    private $connection;

    /**
     * @param $host string
     * @param $dbName string
     * @param $username string
     * @param $password string
     */
    public function __construct($host, $dbName, $username, $password)
    {
        try {
            $this->connection = new \PDO(
                sprintf(
                    'mysql:host=%s;dbname=%s',
                    $host,
                    $dbName
                ),
                $username,
                $password
            );
        } catch (\PDOException $e) {
            return false;
        }
    }

    /**
     * @param DatabaseQuery $query
     * @return PDOStatement
     */
    public function query(DatabaseQuery $query)
    {
        try {
            $statement = $this->connection->prepare((string) $query);
            $statement->execute();
            return $statement;
        } catch (\PDOException $e) {
            return false;
        }
    }

    /**
     * @param DatabaseQuery $query
     * @return bool
     */
    public function execute(DatabaseQuery $query)
    {
        try {
            $this->connection->beginTransaction();
            $this->connection->exec((string) $query);
            return $this->connection->commit();
        } catch (\PDOException $e) {
            $this->connection->rollBack();
            return false;
        }
    }
}
