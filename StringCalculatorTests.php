<?php

require_once "StringCalculator.php";

class StringCalculatorTests extends PHPUnit_Framework_TestCase
{
    private $calculator;

    public function oneNumber()
    {
        return
            [
                [1, '1'],
                [2, '2'],
                [3, '3'],
                [566637, '566637']
            ];
    }
    
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

    /**
     * Test One Number
     *
     * @dataProvider oneNumber
     */
    public function testOneNumber($expected, $string)
    {
        $this->assertEquals($expected, $this->calculator->add($string));
    }

    public function testTwoNumber()
    {
        $this->assertEquals(2, $this->calculator->add("1,1"));
    }
}

?>