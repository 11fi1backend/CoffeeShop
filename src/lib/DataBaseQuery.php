<?php

abstract class DatabaseQuery
{
    /**
     * @param $input
     * @return string
     * @throws \InvalidArgumentException
     */
    public static function escapeString($input)
    {
        if (!is_string($input))
        {
            throw new \InvalidArgumentException("Given parameter has to be a string");
        }

        return addcslashes('\\', $input);
    }

    /**
     * @param $input
     * @return int
     * @throws \InvalidArgumentException
     */
    public static function escapeInt($input)
    {
        if (!is_int($input))
        {
            throw new \InvalidArgumentException("Given parameter has to be an integer");
        }

        return $input;
    }

    /**
     * @param $input
     * @return float
     * @throws \InvalidArgumentException
     */
    public static function escapeFloat($input)
    {
        if (!is_float($input))
        {
            throw new \InvalidArgumentException("Given parameter has to be an float");
        }

        return $input;
    }
}