<?php

require_once "StringCalculator.php";

class StringCalculatorTests extends PHPUnit_Framework_TestCase
{
    private $calculator;

    public function setUp()
    {
        $this->calculator = new StringCalculator();
    }
    
    public function testAddEmptyString()
    {
        $expected = 0;
        $actual = $this->calculator->add("");
        $this->assertTrue($expected === $actual);
        $this->assertSame($expected, $actual);
    }

    public function testOneNumber()
    {
        $expected = 1;
        $actual = $this->calculator->add("1");
        $this->assertEquals($expected, $actual);
        $actual = $this->calculator->add("2");
        $this->assertEquals(2, $actual);
    }
}

?>