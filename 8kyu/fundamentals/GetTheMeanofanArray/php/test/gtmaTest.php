<?php


use PHPUnit\Framework\TestCase;
require "./a.php";
class GetAverageTest extends TestCase {
  public function testExamples() {
    $this->assertEquals(2, get_average([2, 2, 2, 2]));
    $this->assertEquals(3, get_average([1, 2, 3, 4, 5]));
    $this->assertEquals(1, get_average([1, 1, 1, 1, 1, 1, 1, 2]));
  }
  public function testFixed() {
    $this->assertEquals(31, get_average([36, 44, 59, 6, 12]));
    $this->assertEquals(58, get_average([98, 97, 15, 60, 55, 89, 79, 81, 6, 0]));
    $this->assertEquals(81, get_average([100, 100, 99, 67, 76, 75, 76, 81, 48, 96]));
    $this->assertEquals(64, get_average([25, 48, 66, 64, 84, 88, 75]));
    $this->assertEquals(11, get_average([1, 2, 15, 15, 17, 11, 12, 17, 17, 14, 13, 15, 6, 11, 8, 7]));
  }
  protected function solution(array $a): int {
    return array_sum($a) / count($a);
  }
  protected function randomArray(): array {
    return array_map(function () {return rand(0, 100);}, range(1, rand(1, 100)));
  }
  public function testRandom() {
    for ($i = 0; $i < 1e3; $i++) $this->assertEquals($this->solution($a = $this->randomArray()), get_average($a));
  }
}