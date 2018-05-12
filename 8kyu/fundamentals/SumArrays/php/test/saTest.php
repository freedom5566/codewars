<?php

use PHPUnit\Framework\TestCase;
require "./a.php";

class SumTest extends TestCase {
  public function testFixed() {
    $this->assertEquals(0, sum([]));
    $this->assertEquals(9.2, sum([1, 5.2, 4, 0, -1]));
  }
  protected function solution(array $a): float {
    return array_sum($a);
  }
  protected function randomArray(): array {
    return array_map(function () {return random_int(-1e9, 1e9) / 1e6;}, range(1, random_int(10, 100)));
  }
  public function testRandom() {
    foreach (range(1, 1e3) as $_) $this->assertEquals($this->solution($a = $this->randomArray()), sum($a));
  }
}