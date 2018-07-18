
<?php

use PHPUnit\Framework\TestCase;
require "./a.php";
class SumMixTest extends TestCase {
  public function testExamples() {
    $this->assertEquals(22, sum_mix([9, 3, '7', '3']));
    $this->assertEquals(42, sum_mix(['5', '0', 9, 3, 2, 1, '9', 6, 7]));
    $this->assertEquals(41, sum_mix(['3', 6, 6, 0, '5', 8, 5, '6', 2, '0']));
  }
  public function testFixed() {
    $this->assertEquals(45, sum_mix(['1', '5', '8', 8, 9, 9, 2, '3']));
    $this->assertEquals(61, sum_mix([8, 0, 0, 8, 5, 7, 2, 3, 7, 8, 6, 7]));
  }
  protected function randomNumericValue() {
    return lcg_value() < 0.5 ? rand(0, 9) : strval(rand(0, 9));
  }
  protected function randomNumericArray(): array {
    return array_map([$this, 'randomNumericValue'], range(1, rand(1, 100)));
  }
  protected function solution(array $a) {
    return array_sum($a);
  }
  public function testRandom() {
    for ($i = 0; $i < 1e5; $i++) $this->assertEquals($this->solution($a = $this->randomNumericArray()), sum_mix($a));
  }
}