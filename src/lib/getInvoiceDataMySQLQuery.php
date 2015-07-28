<?php

class getInvoiceDataMySQLQuery extends DatabaseQuery
{
    public function __construct()
    {
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