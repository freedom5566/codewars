<?php

use PHPUnit\Framework\TestCase;
require "./a.php";
class FuelCalculatorTest extends TestCase {
    public function testExamples() {
      $this->assertEquals(5.65, fuel_price(5, 1.23));
      $this->assertEquals(18.40, fuel_price(8, 2.5));
      $this->assertEquals(27.50, fuel_price(5, 5.6));
    }
    public function testFixed() {
      $this->assertEquals(9.96, fuel_price(3, 3.37));
      $this->assertEquals(177.4, fuel_price(10, 17.99));
      $this->assertEquals(166.95, fuel_price(9, 18.75));
      $this->assertEquals(2243.52, fuel_price(1968, 1.39));
      $this->assertEquals(12.95, fuel_price(7, 2));
    }
    protected function solution($l, $p) {
      return round($l * max($p - 0.25, $p - 0.05 * ~~($l / 2)), 2);
    }
    public function testRandom() {
      for ($i = 0; $i < 100; $i++) {
        $l = rand(0, 100);
        $p = round(0.25 + 10 * lcg_value(), 2);
        $this->assertEquals($this->solution($l, $p), fuel_price($l, $p));
      }
    }
  }