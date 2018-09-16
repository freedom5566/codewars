<?php
use PHPUnit\Framework\TestCase;
require "./best.php";


class Tests extends TestCase
{
    public function testFixed() {
      $this->assertEquals(16, simpleMultiplication(2));
      $this->assertEquals(9, simpleMultiplication(1));
      $this->assertEquals(64, simpleMultiplication(8));
      $this->assertEquals(32, simpleMultiplication(4));
      $this->assertEquals(45, simpleMultiplication(5));
    }
    public function testRandom() {
      for($i = 0; $i < 100; $i++) {
        $a = mt_rand(0, 10000);
        $b = $a * (8 + ($a & 1));
        $this->assertEquals($b, simpleMultiplication($a));
      }
    }
}