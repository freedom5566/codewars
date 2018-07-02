<?php


use PHPUnit\Framework\TestCase;
require "./a.php";

class PassByReferenceTest extends TestCase {
    protected function randomize($array) {
      // Array Shuffle
      // Reproduced with permission from PHPTester by DonaldKellett (https://github.com/DonaldKellett/PHPTester)
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
    protected function assertFuzzyEquals($expected, $actual) {
      $this->assertTrue($expected == 0 ? abs($actual - $expected) < 1e-12 : abs($actual - $expected) / abs($expected) < 1e-12, "Actual value $actual was not sufficiently close to expected value $expected");
    }
    public function testExample() {
      $n = 10;
      double($n);
      $this->assertEquals(20, $n);
      halve($n);
      $this->assertEquals(10, $n);
      enlarge($n, 5);
      $this->assertEquals(50, $n);
    }
    public function testPassByReference() {
      foreach ($this->randomize([
        function () {
          $n = 1;
          double($n);
          $this->assertEquals(2, $n);
          enlarge($n, 3);
          $this->assertEquals(6, $n);
          halve($n);
          halve($n);
          $this->assertFuzzyEquals(1.5, $n);
        },
        function () {
          $n = 10;
          halve($n);
          $this->assertEquals(5, $n);
          enlarge($n, 1 / 23);
          $this->assertFuzzyEquals(5 / 23, $n);
          double($n);
          $this->assertFuzzyEquals(10 / 23, $n);
        },
        function () {
          $n = 2;
          double($n);
          $this->assertEquals(4, $n);
          enlarge($n, 137);
          $this->assertEquals(548, $n);
          halve($n);
          $this->assertEquals(274, $n);
        },
        function () {
          $n = M_PI;
          enlarge($n, M_E);
          $this->assertFuzzyEquals(M_PI * M_E, $n);
          enlarge($n, 1 / M_PI);
          $this->assertFuzzyEquals(M_E, $n);
          enlarge($n, 1 / 3);
          $this->assertFuzzyEquals(M_E / 3, $n);
          double($n);
          $this->assertFuzzyEquals(2 * M_E / 3, $n);
          double($n);
          double($n);
          $this->assertFuzzyEquals(8 * M_E / 3, $n);
          halve($n);
          halve($n);
          halve($n);
          halve($n);
          $this->assertFuzzyEquals(M_E / 6, $n);
        },
        function () {
          $n = 15.5;
          halve($n);
          $this->assertFuzzyEquals(7.75, $n);
          halve($n);
          $this->assertFuzzyEquals(3.875, $n);
          enlarge($n, 1 / 7);
          $this->assertFuzzyEquals(31 / 56, $n);
          enlarge($n, 100 * M_PI);
          $this->assertFuzzyEquals(31 / 56 * 100 * M_PI, $n);
          double($n);
          double($n);
          double($n);
          double($n);
          double($n);
          $this->assertFuzzyEquals(124 / 7 * 100 * M_PI, $n);
          enlarge($n, 7 / 124 / 100 / M_PI);
          $this->assertFuzzyEquals(1, $n);
        }
      ]) as $testcase) $testcase();
    }
  }