<?php

use PHPUnit\Framework\TestCase;
require "./a.php";

class PreFizzTest extends TestCase {
  public function testExamples() {
    $this->assertEquals([1], pre_fizz(1));
    $this->assertEquals([1, 2], pre_fizz(2));
    $this->assertEquals([1, 2, 3], pre_fizz(3));
    $this->assertEquals([1, 2, 3, 4], pre_fizz(4));
    $this->assertEquals([1, 2, 3, 4, 5], pre_fizz(5));
  }
  public function testFixed() {
    $this->assertEquals(range(1, 27), pre_fizz(27));
    $this->assertEquals(range(1, 13), pre_fizz(13));
    $this->assertEquals(range(1, 55), pre_fizz(55));
    $this->assertEquals(range(1, 100), pre_fizz(100));
    $this->assertEquals(range(1, 1024), pre_fizz(1024));
  }
  public function testRandom() {
    for ($i = 0; $i < 100; $i++) $this->assertEquals(range(1, $n = rand(1, 1e6)), pre_fizz($n));
  }
}