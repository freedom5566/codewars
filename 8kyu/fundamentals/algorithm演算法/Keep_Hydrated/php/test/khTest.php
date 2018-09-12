<?php

use PHPUnit\Framework\TestCase;
require "./best.php";

class KeepHydratedTest extends TestCase {
    public function testFixed() {
      $this->assertEquals(1, litres(2));
      $this->assertEquals(0, litres(1.4));
      $this->assertEquals(6, litres(12.3));
      $this->assertEquals(0, litres(0.82));
      $this->assertEquals(5, litres(11.8));
      $this->assertEquals(893, litres(1787));
      $this->assertEquals(0, litres(0));
    }
    protected function solution(float $t): int {
      return 0.5 * $t;
    }
    public function testRandom() {
      for ($i = 0; $i < 1e3; $i++) $this->assertEquals($this->solution($t = 1000 * lcg_value()), litres($t));
    }
  }