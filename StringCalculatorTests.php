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

    public function testOneNumber()
    {
        $calculator = new StringCalculator();
        $expected = 1;
        $actual = $calculator->add("1");
        $this->assertEquals($expected, $actual);
        $actual = $calculator->add("2");
        $this->assertEquals(2, $actual);
    }
}

?>