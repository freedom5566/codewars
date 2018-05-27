<?php

use PHPUnit\Framework\TestCase;
require "./best.php";
class PositiveSumTest extends TestCase {
    public function testExamples() {
      $this->assertEquals(15, positive_sum([1, 2, 3, 4, 5]));
      $this->assertEquals(13, positive_sum([1, -2, 3, 4, 5]));
      $this->assertEquals(0, positive_sum([]));
      $this->assertEquals(0, positive_sum([-1, -2, -3, -4, -5]));
      $this->assertEquals(9, positive_sum([-1, 2, 3, 4, -5]));
    }
    public function testFixed() {
      $this->assertEquals(1, positive_sum([0.1, 0.2, 0.3, 0.4, -0.5]));
      $this->assertEquals(0.3, positive_sum([0.1, -0.4, 0.2, -0.3, -0.5, 0]));
      $this->assertEquals(7.3, positive_sum([-7, -9, 7, -0.8, 0.3]));
      $this->assertEquals(2, positive_sum([1, 1, -2, -3, -5, -8, -13, -21, -34, -55, -89, -144]));
      $this->assertEquals(376, positive_sum([1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144]));
    }
    protected function solution($a) {
      return array_sum(array_filter($a, function ($n) {return $n > 0;}));
    }
    protected function randomArray() {
      return array_map(function () {return rand(-100, 100);}, range(1, rand(1, 100)));
    }
    public function testRandom() {
      for ($i = 0; $i < 1e3; $i++) $this->assertEquals($this->solution($a = $this->randomArray()), positive_sum($a));
    }
  }