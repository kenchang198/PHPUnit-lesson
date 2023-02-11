<?php

use PHPUnit\Framework\TestCase;
use Project\Calculator;

class CalculatorTest extends TestCase
{
    public function testMultiply()
    {
        $calc = new Calculator();

        $result = $calc->multiply(3, 4);

        $this->assertEquals(12, $result);
    }

    public function testDivide()
    {
        $calc = new Calculator();

        $result = $calc->divide(12, 3);

        $this->assertEquals(4, $result);
    }
}
