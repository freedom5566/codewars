<?php

use PHPUnit\Framework\TestCase;
require "./a.php";
class SummationTest extends TestCase {
  public function testThatSummationWorksForExampleTests() {
    $this->assertEquals(summation(1), 1);
    $this->assertEquals(summation(2), 3);
    $this->assertEquals(summation(3), 6);
    $this->assertEquals(summation(4), 10);
    $this->assertEquals(summation(5), 15);
  }
  public function testThatSummationWorksForFixedTests() {
    $this->assertEquals(summation(6), 21);
    $this->assertEquals(summation(7), 28);
    $this->assertEquals(summation(8), 36);
    $this->assertEquals(summation(9), 45);
    $this->assertEquals(summation(10), 55);
    $this->assertEquals(summation(11), 66);
    $this->assertEquals(summation(12), 78);
    $this->assertEquals(summation(13), 91);
    $this->assertEquals(summation(14), 105);
    $this->assertEquals(summation(15), 120);
    $this->assertEquals(summation(16), 136);
    $this->assertEquals(summation(17), 153);
    $this->assertEquals(summation(18), 171);
    $this->assertEquals(summation(19), 190);
    $this->assertEquals(summation(20), 210);
  }
  protected function randomNumber() {
    return ~~(101 * lcg_value());
  }
  public function testThatSummationWorksForRandomTests() {
    for ($i = 0; $i < 100; $i++) {
      $n = $this->randomNumber();
      $this->assertEquals(summation($n), $n * ($n + 1) / 2);
    }
  }
}