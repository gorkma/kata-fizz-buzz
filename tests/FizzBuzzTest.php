<?php


namespace Tests;


use FizzBuzz\FizzBuzz;

class FizzBuzzTest extends \PHPUnit_Framework_TestCase
{
    public function test_return_1()
    {
        $number = new FizzBuzz(1);

       $this->assertEquals(1, $number->obtainResult());
        
    }

    public function test_return_2()
    {
        $number = new FizzBuzz(2);
        $this->assertEquals(2, $number->obtainResult());
    }

    public function test_return_fizz()
    {
        $number = new FizzBuzz(3);
        $this->assertEquals('Fizz', $number->obtainResult());
    }

    public function test_return_buzz()
    {
        $number = new FizzBuzz(5);
        $this->assertEquals('Buzz', $number->obtainResult());
    }

    public function test_return_Fizz_6()
    {
        $number = new FizzBuzz(6);
        $this->assertEquals('Fizz', $number->obtainResult());
    }

    public function test_return_Buzz_10()
    {
        $number = new FizzBuzz(10);
        $this->assertEquals('Buzz', $number->obtainResult());
    }

    public function test_return_11()
    {
        $number = new FizzBuzz(11);
        $this->assertEquals(11, $number->obtainResult());
    }

    public function test_return_Fizz_12()
    {
        $number = new FizzBuzz(12);
        $this->assertEquals('Fizz', $number->obtainResult());
    }
    
    
}
