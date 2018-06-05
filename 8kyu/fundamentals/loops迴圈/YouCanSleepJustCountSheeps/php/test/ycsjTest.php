<?php

use PHPUnit\Framework\TestCase;
require "./a.php";


class MyTestCases extends TestCase
{
    private function solution($num){
      return join(array_map(function($n) {return $n . " sheep...";}, range(1, $num)));
    }

    public function test_fixed()
    {
      $this->assertEquals('1 sheep...', countsheep(1));
      $this->assertEquals('1 sheep...2 sheep...', countsheep(2));
      $this->assertEquals('1 sheep...2 sheep...3 sheep...', countsheep(3));
    }
    
    public function test_random()
    {
      $numbers = range(1, 100);
      shuffle($numbers);
      foreach($numbers as $n) {$this->assertEquals($this->solution($n), countsheep($n));}
    }
 }   