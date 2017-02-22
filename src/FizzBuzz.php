<?php


namespace FizzBuzz;


class FizzBuzz
{

    protected $number;

    public function __construct($number)
    {
        $this->number = $number;
    }
    public function obtainResult()
    {
        if($this->isFizz()){
            return 'Fizz';
        }

        if($this->isBuzz()){
            return 'Buzz';
        }
        
        
        return $this->number;
    }

    private function isFizz()
    {
        return $this->number % 3 == 0;
    }

    private function isBuzz()
    {
        return $this->number % 5 == 0;
    }
}