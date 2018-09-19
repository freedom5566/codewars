<?php

use PHPUnit\Framework\TestCase;
require "./a.php";
class MyTestCases extends TestCase
{
    protected function local_solution($dad, $son) {
       return abs( $dad - $son * 2) ;
    }

    public function testBasicTests() {
      $this->assertEquals( twice_as_old(36,7), 22);
      $this->assertEquals( twice_as_old(55,30), 5);
      $this->assertEquals( twice_as_old(42,21), 0);
      $this->assertEquals( twice_as_old(22,1), 20);
      $this->assertEquals( twice_as_old(29,0), 29);
    }
    
    public function testForRandom() {
      for($i=50; $i > 0; $i--) {
        $dad = rand(18,100);
        $son = max(0, $dad-rand(18, 40));
        $this->assertEquals( twice_as_old($dad,$son), $this->local_solution($dad, $son) );
      }
    }
}