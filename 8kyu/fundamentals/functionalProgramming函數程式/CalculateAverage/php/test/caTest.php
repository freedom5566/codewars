<?php

use PHPUnit\Framework\TestCase;
require "./a.php";


class CalculateAverageTest extends TestCase {
  public function testExamples() {
    $this->assertEquals(1, find_average([1, 1, 1]));
    $this->assertEquals(2, find_average([1, 2, 3]));
    $this->assertEquals(2.5, find_average([1, 2, 3, 4]));
  }
  public function testFixed() {
    $this->assertEquals(3, find_average([5, 2, 4, 1, 3]));
    $this->assertEquals(6, find_average([2, 4, 6, 6, 19, -1]));
    $this->assertEquals(4, find_average([3.5, 4.5, 2.5, 5.5, 6.5, 1.5]));
    $this->assertEquals(365 / 6, find_average([56, 78, 88, 95, 45, 3]));
    $this->assertEquals(83324, find_average([83324]));
  }
  protected function solution(array $a): float {
    return array_sum($a) / count($a);
  }
  protected function randomArray(): array {
    return array_map(function () {return rand(-100, 100);}, range(1, rand(10, 100)));
  }
  public function testRandom() {
    for ($i = 0; $i < 1e3; $i++) $this->assertEquals($this->solution($a = $this->randomArray()), find_average($a));
  }
}