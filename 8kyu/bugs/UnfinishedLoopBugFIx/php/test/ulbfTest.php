<?php

use PHPUnit\Framework\TestCase;
require "./best.php";
class SolutionTest extends TestCase
{
    
    public function testArrayCreation() {
      $this->assertEquals(createArray(1), [1]);
      $this->assertEquals(createArray(2), [1,2]);
      $this->assertEquals(createArray(3), [1,2,3]);
      $this->assertEquals(createArray(4), [1,2,3,4]);
      $this->assertEquals(createArray(5), [1,2,3,4,5]);
      $this->assertEquals(createArray(6), [1,2,3,4,5,6]);
      $this->assertEquals(createArray(7), [1,2,3,4,5,6,7]);
      $this->assertEquals(createArray(8), [1,2,3,4,5,6,7,8]);
      $this->assertEquals(createArray(9), [1,2,3,4,5,6,7,8,9]);
      $this->assertEquals(createArray(10), [1,2,3,4,5,6,7,8,9,10]);
    }
}