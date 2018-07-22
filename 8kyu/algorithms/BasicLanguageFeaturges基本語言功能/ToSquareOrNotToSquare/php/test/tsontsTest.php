<?php

use PHPUnit\Framework\TestCase;
require "./best.php";
class MyTestCases extends TestCase
{    
    public function testBasicTests() {
      $input = [ 4, 3, 9, 7, 2, 1 ];
      $expected = [ 2, 9, 3, 49, 4, 1 ];
      $this->assertEquals($expected, squareOrSquareRoot($input));
      
      $input = [ 100, 101, 5, 5, 1, 1 ];
      $expected = [ 10, 10201, 25, 25, 1, 1 ];
      $this->assertEquals($expected, squareOrSquareRoot($input));
    
      $input = [ 1, 2, 3, 4, 5, 6 ];
      $expected = [ 1, 4, 9, 2, 25, 36 ];
      $this->assertEquals($expected, squareOrSquareRoot($input));
    }
    
    public function testRandomTests() {
      for ($i = 0; $i < 30; $i++) {
        $array = [];
        $len = rand(3,20);
        for ($j = 0; $j < $len; $j++) {
          $array[] = rand(1, 100);
        }
        $this->assertEquals($this->solution($array), squareOrSquareRoot($array));
      }
    }
    
    private function solution($array) {
      $result = [];
      for ($i = 0; $i < count($array); $i++) {
        $sqrt = sqrt($array[$i]);
        if($sqrt == intval($sqrt))
        {
          $result[$i] = intval($sqrt);
        }
        else
        {
          $result[$i] = $array[$i] * $array[$i];
        }
      }
      return $result;
    }
}  