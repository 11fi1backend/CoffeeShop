<?php

class insertUserMySQLQuery extends \lib\DatabaseQuery
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $copyCode;

    public function __construct($name, $lastName, $copyCode)
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->copyCode = $copyCode;
    }

    public function __toString()
    {
        // TODO: complete SQL
        return sprintf(
            'INSERT INTO users VALUES (%s, %s, %s)',
            $this->escapeString($this->name),
            $this->escapeString($this->lastName),
            $this->escapeString($this->copyCode)
        );
    }
}