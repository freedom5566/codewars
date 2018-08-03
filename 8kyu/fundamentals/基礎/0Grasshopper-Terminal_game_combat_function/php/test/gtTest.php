<?php
use PHPUnit\Framework\TestCase;
require "./a.php";
class MyTestCases extends TestCase
{
    public function testSample() {
      $this->assertEquals(95, combat(100, 5));
      $this->assertEquals(84, combat(92, 8));
      $this->assertEquals(0, combat(20, 30));
    }
    
    public function testRandom() {
      for ($cw=0; $cw<=1e5; $cw++) {
        $h = rand(1,100);
        $d = rand(1,100);
        $this->assertEquals(max(0,$h-$d), combat($h, $d));
      }
    }
}