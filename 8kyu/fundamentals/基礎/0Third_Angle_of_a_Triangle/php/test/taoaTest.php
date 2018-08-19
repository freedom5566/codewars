<?php

use PHPUnit\Framework\TestCase;
require "./a.php";

class MyTestCases extends TestCase
{
    public function testAssert1() {
       $this->assertEquals(150, otherAngle(10,20));
    }
    public function testAssert2() {
       $this->assertEquals(120, otherAngle(40,20));
    }
    public function testAssert3() {
       $this->assertEquals(73, otherAngle(73,34));
    }
    public function testAssert4() {
       $this->assertEquals(11, otherAngle(99, 70));
    }    
    public function testAssertRandom() {
       $i = 0;
       while ($i < 1e5) {
         $a1 = rand(1,80);
         $a2 = rand(1,80);       
         $this->assertEquals(180-$a1-$a2, otherAngle($a1, $a2));
         $i++;
       }
    }      
}