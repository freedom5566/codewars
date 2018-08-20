<?php

use PHPUnit\Framework\TestCase;
require "./a.php";
class InAscOrderTest extends TestCase {
    public function testExamples() {
      $this->assertTrue(in_asc_order([1, 2, 4, 7, 19]));
      $this->assertTrue(in_asc_order([1, 2, 3, 4, 5]));
      $this->assertFalse(in_asc_order([1, 6, 10, 18, 2, 4, 20]));
      $this->assertFalse(in_asc_order([9, 8, 7, 6, 5, 4, 3, 2, 1]));
    }
    public function testArrayOf2() {
      $this->assertTrue(in_asc_order([1, 2]));
      $this->assertTrue(in_asc_order([-2, -1]));
      $this->assertTrue(in_asc_order([45, 987]));
      $this->assertTrue(in_asc_order([-1094, -45]));
      $this->assertFalse(in_asc_order([2, 1]));
      $this->assertFalse(in_asc_order([-1, -2]));
      $this->assertFalse(in_asc_order([987, 45]));
      $this->assertFalse(in_asc_order([-45, -1094]));
    }
    public function testArrayOf3() {
      $this->assertTrue(in_asc_order([1, 2, 3]));
      $this->assertFalse(in_asc_order([1, 3, 2]));
      $this->assertFalse(in_asc_order([2, 1, 3]));
      $this->assertFalse(in_asc_order([2, 3, 1]));
      $this->assertFalse(in_asc_order([3, 1, 2]));
      $this->assertFalse(in_asc_order([3, 2, 1]));
      $this->assertTrue(in_asc_order([-666, -33, -10]));
      $this->assertFalse(in_asc_order([-33, -10, -666]));
      $this->assertFalse(in_asc_order([-10, -666, -33]));
      $this->assertFalse(in_asc_order([-10, -33, -666]));
      $this->assertFalse(in_asc_order([-33, -666, -10]));
      $this->assertFalse(in_asc_order([-666, -10, -33]));
    }
    public function testAdvanced() {
      $this->assertTrue(in_asc_order([1,4,13,97,508,1047,20058]));
      $this->assertFalse(in_asc_order([56,98,123,67,742,1024,32,90969]));
    }
    protected function solution($a) {
      for ($i = 0; $i < count($a) - 1; $i++) {
        if ($a[$i] > $a[$i + 1]) return false;
      }
      return true;
    }
    public function testRandom() {
      for ($i = 0; $i < 1e5; $i++) $this->assertEquals($this->solution($a = [-1000 + 2000 * lcg_value(), -1000 + 2000 * lcg_value(), -1000 + 2000 * lcg_value(), -1000 + 2000 * lcg_value()]), in_asc_order($a));
    }
  }