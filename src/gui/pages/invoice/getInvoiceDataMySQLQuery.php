<?php

class insertUserMySQLQuery extends DatabaseQuery
{


    public function __construct($name, $copyCode, $locked)
    {
        $this->name = $name;
        $this->lastName = $copyCode;
        $this->copyCode = $locked;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return sprintf(
            'SELECT
                c.ID AS customerID,
                c.Name AS customerName,
                o.Quantity AS totalQuantity,
                o.Totalprice AS invoiceAmount
            FROM orders o
            INNER JOIN customer c ON o.Cust_ID = c.ID
            GROUP BY c.ID
            HAVING(SUM(o.Quantity)'
        );
    }
}