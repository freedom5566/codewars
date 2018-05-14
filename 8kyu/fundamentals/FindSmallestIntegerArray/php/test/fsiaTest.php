<?php

use PHPUnit\Framework\TestCase;
require "./a.php";

// PHPUnit Test Examples:
// TODO: Replace examples and use TDD development by writing your own tests
class smallest extends TestCase
{
    // test function names should start with "test"
    public function testPositive() {
      $this->assertEquals(smallestInteger([3, 5, 10, 1, 4, 55]), 1);
      $this->assertEquals(smallestInteger([0]), 0);
    }
    
    public function testNegative() {
      $this->assertEquals(smallestInteger([-3, -5, -10, -1, -4, -55]), -55);
      $this->assertEquals(smallestInteger([0]), 0);
    }
    
    public function testRandom() {
      for ($i=0;$i<51;$i++)
      {
          $array = array();
          $n = rand(0,20);
          for ($j=0;$j<=$n;$j++)
          {
              $x = rand(-100,100);
              array_push($array, $x);
          }
          $this->assertEquals(smallestInteger($array), SmallestInteger($array));
          echo "Testing Test " . $i . "\n";
      }
    }
    
    public function SmallestInteger ($arr) {
        return min($arr);
    }
}