<?php

use PHPUnit\Framework\TestCase;
require "./clever.php";
// PHPUnit Test Examples:
// TODO: Replace examples and use TDD development by writing your own tests
class fullTestCases extends TestCase
{
    // test function names should start with "test"
    public function testSuccesses() {
            $this->assertTrue(cubeChecker(1,1));
            $this->assertTrue(cubeChecker(8,2));
            $this->assertTrue(cubeChecker(27,3));
            $this->assertTrue(cubeChecker(64,4));
            $this->assertTrue(cubeChecker(125,5));
            $this->assertTrue(cubeChecker(216,6));
            $this->assertTrue(cubeChecker(343,7));
            $this->assertTrue(cubeChecker(512,8));
            $this->assertTrue(cubeChecker(729,9));
            $this->assertTrue(cubeChecker(1000,10));
    }
    public function testFailures() {
            $this->assertFalse(cubeChecker(0,0));
            $this->assertFalse(cubeChecker(-1,-1));
            $this->assertFalse(cubeChecker(121,-2));
    }
    public function testRandomTests(){
      for($i=0; $i < 500; $i++){
        $rand = rand(-10000,10000);
        if($rand > 0){
          $this->assertTrue(cubeChecker(pow($rand,3),$rand));
        } else {
          $this->assertFalse(cubeChecker(pow($rand,3),$rand));
        }
      }
    }
}