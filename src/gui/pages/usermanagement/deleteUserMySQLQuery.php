<?php

class deleteUserMySQLQuery extends DatabaseQuery
{
    /**
     * @var string
     */
    private $ID;

    public function __construct($ID)
    {
        $this->ID = $ID;
    }

    public function __toString()
    {
        return sprintf(
            'DELETE FROM customer WHERE ID = %s)',
            $this->escapeString($this->ID)
        );
    }
}