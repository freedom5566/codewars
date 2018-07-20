<?php

use PHPUnit\Framework\TestCase;
require "./a.php";
class Tests extends TestCase
{
    public function testFixed() {
      $this->assertEquals(multiply(2, 2), 4);
      $this->assertEquals(multiply(4, 5), 20);
    }
    public function testRandom() {
      for($i = 0; $i < 2e5; $i++) {
        $a = mt_rand(-1000, 1000);
        $b = mt_rand(-1000, 1000);
        $this->assertEquals(multiply($a, $b), $a * $b);
      }
    }
}