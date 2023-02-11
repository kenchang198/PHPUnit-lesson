<?php
namespace Project;

class Calculator
{
    /**
     * 正の整数を乗算した値を返す
     */
    public function multiply(int $x, int $y): int|float
    {
        return $x * $y;
        // return $x * 0;
    }

    /**
     * 正の整数を除算した値を返す
     */
    public function divide(int $x, int $y): int|float
    {
        return $x / $y;
    }
}
