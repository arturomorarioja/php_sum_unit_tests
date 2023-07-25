<?php

require_once 'src\calculator.php';

use PHPUnit\Framework\TestCase;

class calculatorTest extends TestCase {

    /*
        Positive testing. Valid inputs are tested
    */

    public function testAdd4To13Is17() {
        $number1 = 4; 
        $number2 = 13; 
        $expected = 17;

        $result = sum($number1, $number2);

        $this->assertEquals($expected, $result, "The result should be $expected");
    }

    public function testAdd15To21Is36() {
        $number1 = 15; 
        $number2 = 21; 
        $expected = 36;

        $result = sum($number1, $number2);

        $this->assertEquals($expected, $result, "The result should be $expected");
    }

    public function testAddMinus4To5Is1() {
        $number1 = -4; 
        $number2 = 5; 
        $expected = 1;

        $result = sum($number1, $number2);

        $this->assertEquals($expected, $result, "The result should be $expected");
    }

    /*
        Negative testing. Invalid inputs are tested
    */

    public function testAdd1To1IsNot1() {
        $number1 = 1; 
        $number2 = 1; 
        $notExpected = 1;

        $result = sum($number1, $number2);

        $this->assertNotEquals($notExpected, $result, "The result should not be $notExpected");
    }

    /*
        Data type testing
    */
    
    public function testAddTwoNumbersReturnsNumber() {
        $number1 = 4; 
        $number2 = 5; 

        $result = sum($number1, $number2);

        $this->assertIsNumeric($result, "The result should be numeric");
    }

    public function testAddTwoIntegersReturnsInteger() {
        $number1 = 4; 
        $number2 = 5; 

        $result = sum($number1, $number2);

        $this->assertIsInt($result, "The result should be an integer");
    }
}