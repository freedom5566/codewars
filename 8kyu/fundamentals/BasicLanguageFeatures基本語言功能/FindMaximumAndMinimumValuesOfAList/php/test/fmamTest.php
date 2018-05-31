<?php

use PHPUnit\Framework\TestCase;
require "./a.php";
class MaxMinTest extends TestCase {
  public function testThatFunctionsWorkForExamples() {
    $this->assertEquals(maximum(array(1, 2, 3, 4, 5)), 5);
    $this->assertEquals(minimum(array(1, 2, 3, 4, 5)), 1);
  }
  public function testThatFunctionWorksForFixedTests() {
    $this->assertEquals(maximum(array(10, 5, 2, 99, 70, -110, -999)), 99);
    $this->assertEquals(minimum(array(10, 5, 2, 99, 70, -110, -999)), -999);
    $this->assertEquals(maximum(array(22, -22, 98, -98, 1024, -1024, -7, 7)), 1024);
    $this->assertEquals(minimum(array(22, -22, 98, -98, 1024, -1024, -7, 7)), -1024);
    $this->assertEquals(maximum(array(64, 9, 4, 16, 100, 1, 25, 49, 36, 81)), 100);
    $this->assertEquals(minimum(array(64, 9, 4, 16, 100, 1, 25, 49, 36, 81)), 1);
  }
  protected function randomNumber() {
    return ~~(101 * lcg_value());
  }
  public function testThatFunctionsWorkForRandomTests() {
    for ($i = 0; $i < 100; $i++) {
      $rand_arr = array($this->randomNumber(), $this->randomNumber(), $this->randomNumber(), $this->randomNumber(), $this->randomNumber(), $this->randomNumber(), $this->randomNumber(), $this->randomNumber(), $this->randomNumber(), $this->randomNumber());
      $this->assertEquals(maximum($rand_arr), max($rand_arr));
      $this->assertEquals(minimum($rand_arr), min($rand_arr));
    }
  }
}