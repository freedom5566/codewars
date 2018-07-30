<?php

use PHPUnit\Framework\TestCase;
require "./clever.php";
class GrowTest extends TestCase {
  public function testExamples() {
    $this->assertEquals(6, grow([1, 2, 3]));
    $this->assertEquals(16, grow([4, 1, 1, 1, 4]));
    $this->assertEquals(64, grow([2, 2, 2, 2, 2, 2]));
  }
  public function testFixed() {
    $this->assertEquals(10584, grow([3, 7, 7, 8, 9, 1]));
    $this->assertEquals(3840, grow([2, 4, 6, 8, 10]));
    $this->assertEquals(5040, grow(range(1, 7)));
    $this->assertEquals(2227680, grow([1, 1, 2, 3, 5, 8, 13, 21, 34]));
    $this->assertEquals(0, grow([0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144]));
  }
  protected function solution(array $a): int {
    return array_reduce($a, function ($s, $e) {return $s * $e;}, 1);
  }
  protected function randomArray(): array {
    return array_map(function () {return rand(1, 20);}, range(1, rand(1, 10)));
  }
  public function testRandom() {
    for ($i = 0; $i < 1e3; $i++) $this->assertEquals($this->solution($a = $this->randomArray()), grow($a));
  }
}