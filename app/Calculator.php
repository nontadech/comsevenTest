<?php


namespace App;


class Calculator
{

    /**
     * @param int $a
     * @param int $b
     * @return int
     */
    public static function add($a, $b)
    {
        // TODO @laravel-test
        return $a+$b;
    }

    /**
     * @param int $a
     * @param int $b
     * @return int
     */
    public static function subtract($a, $b)
    {
        // TODO @laravel-test
        return $a-$b;
    }

    /**
     * @param int $a
     * @param int $b
     * @return int
     */
    public static function multiply($a, $b)
    {
        // TODO @laravel-test
        return $a*$b;
    }

    /**
     * @throws \InvalidArgumentException
     * @param int $a
     * @param int $b
     * @return float
     */
    public static function divide($a, $b)
    {
        // TODO @laravel-test
        return $a/$b;
    }   

    /**
     * @throws \InvalidArgumentException
     * @param int $a
     * @param int $b
     * @return int
     */
    public static function modulo($a, $b)
    {
        // TODO @laravel-test
        return $a%$b;
    }
}
