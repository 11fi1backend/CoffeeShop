<?php

class insertUserMySQLQuery extends DatabaseQuery
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $copyCode;

    /**
     * @var string
     */
    private $locked;

    public function __construct($name, $copyCode, $locked)
    {
        $this->name = $name;
        $this->lastName = $copyCode;
        $this->copyCode = $locked;
    }

    public function __toString()
    {
        // TODO: complete SQL
        return sprintf(
            'INSERT INTO customer VALUES (%s, %s, %s)',
            $this->escapeString($this->name),
            $this->escapeString($this->copyCode),
            $this->escapeString($this->locked)
        );
    }
}