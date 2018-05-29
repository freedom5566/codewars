<?php

use PHPUnit\Framework\TestCase;
require "./a.php";
class AreaOfASquareTest extends TestCase {
  protected function randomize($array) {
    // Array Shuffling
    // Code Snippet reproduced and edited from PHPTester (https://github.com/DonaldKellett/PHPTester) with permission
    if (!is_array($array)) throw new TypeError("In PHPTester::randomize, \$array must be a valid array");
    foreach ($array as $key => $value) {
      if (!is_int($key)) throw new TypeError("In PHPTester::randomize, \$array cannot be an associative array");
    }
    for ($i = 0; $i < 2 * count($array); $i++) {
      $a = rand(0, count($array) - 1);
      $b = rand(0, count($array) - 1);
      list($array[$a], $array[$b]) = array($array[$b], $array[$a]);
    }
    return $array;
  }
  public function testFixed() {
    foreach ($this->randomize([function () {
      $this->assertEquals(0, square_area(0));
    }, function () {
      $this->assertEquals(1.62, square_area(2));
    }, function () {
      $this->assertEquals(80, square_area(14.05));
    }]) as $testcase) $testcase();
  }
  protected function solution($A) {
    return round(4 * $A * $A / M_PI ** 2, 2);
  }
  public function testRandom() {
    for ($i = 0; $i < 1000; $i++) $this->assertEquals($this->solution($A = rand(0, 100)), square_area($A));
  }
}