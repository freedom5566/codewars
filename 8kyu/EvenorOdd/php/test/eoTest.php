<?php

use PHPUnit\Framework\TestCase;
require "./a.php";

class EvenOrOddTest extends TestCase {
  public function testExamples() {
    $this->assertEquals("Even", even_or_odd(2));
    $this->assertEquals("Even", even_or_odd(0));
    $this->assertEquals("Odd", even_or_odd(7));
    $this->assertEquals("Odd", even_or_odd(1));
  }
  public function testFixed() {
    $this->assertEquals("Even", even_or_odd(-10));
    $this->assertEquals("Odd", even_or_odd(-9));
    $this->assertEquals("Even", even_or_odd(-8));
    $this->assertEquals("Odd", even_or_odd(-7));
    $this->assertEquals("Even", even_or_odd(-6));
    $this->assertEquals("Odd", even_or_odd(-5));
    $this->assertEquals("Even", even_or_odd(-4));
    $this->assertEquals("Odd", even_or_odd(-3));
    $this->assertEquals("Even", even_or_odd(-2));
    $this->assertEquals("Odd", even_or_odd(-1));
    $this->assertEquals("Odd", even_or_odd(3));
    $this->assertEquals("Even", even_or_odd(4));
    $this->assertEquals("Odd", even_or_odd(5));
    $this->assertEquals("Even", even_or_odd(6));
    $this->assertEquals("Even", even_or_odd(8));
    $this->assertEquals("Odd", even_or_odd(9));
    $this->assertEquals("Even", even_or_odd(10));
    $this->assertEquals("Even", even_or_odd(1545452));
    $this->assertEquals("Even", even_or_odd(78));
    $this->assertEquals("Odd", even_or_odd(17));
    $this->assertEquals("Odd", even_or_odd(74156741));
    $this->assertEquals("Even", even_or_odd(100000));
    $this->assertEquals("Even", even_or_odd(-1545452));
    $this->assertEquals("Even", even_or_odd(-78));
    $this->assertEquals("Odd", even_or_odd(-17));
    $this->assertEquals("Odd", even_or_odd(-74156741));
    $this->assertEquals("Even", even_or_odd(-100000));
  }
  protected function solution(int $n): string {
    return $n % 2 ? "Odd" : "Even";
  }
  public function testRandom() {
    for ($i = 0; $i < 1e3; $i++) $this->assertEquals($this->solution($n = rand(-100, 100)), even_or_odd($n));
  }
}