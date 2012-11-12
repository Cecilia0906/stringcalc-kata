<?php

require_once "StringCalculator.php";

class StringCalculatorTests extends PHPUnit_Framework_TestCase
{
    public function testAddEmptyString()
    {
        $calculator = new StringCalculator();
        $expected = 0;
        $actual = $calculator->add("");
        $this->assertTrue($expected === $actual);
        $this->assertSame($expected, $actual);
    }

}

?>