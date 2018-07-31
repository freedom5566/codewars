<?php

// PHPUnit Test Examples:
// TODO: Replace examples and use TDD development by writing your own tests
use PHPUnit\Framework\TestCase;
require "./a.php";
class CalculatorTest extends TestCase {
  public function testExamples() {
    $this->assertEquals(3, calculator(1, 2, "+"));
    $this->assertEquals(-1, calculator(1, 2, "-"));
    $this->assertEquals(15, calculator(3, 5, "*"));
    $this->assertEquals(3, calculator(6, 2, "/"));
    $this->assertEquals("unknown value", calculator(6, 2, "$"));
    $this->assertEquals("unknown value", calculator(6, "h", "*"));
  }
  public function testFixed() {
    $this->assertEquals(1, calculator(0.5, 2, "*"), "Your function should be able to handle floats");
    $this->assertEquals(4.7, calculator(3.9, 0.8, "+"));
    $this->assertEquals(2, calculator(6.4, 3.2, "/"));
    $this->assertNotEquals(2, calculator(3.2, 6.4, "/"), "Your function should perform the operation on the two numbers in the given order.");
    $this->assertEquals(0.5, calculator(3.2, 6.4, "/"));
    $this->assertNotEquals(0.5, calculator(6.4, 3.2, "/"));
    $this->assertEquals("unknown value", calculator(2, 3, "**"), "Your function should NOT support exponentation");
    $this->assertEquals("unknown value", calculator("2", 3, "+"), "String \"2\" is not a number!");
    $this->assertEquals(2905.85, calculator(65.3, 44.5, "*"));
    $this->assertEquals(109.8, calculator(44.5, 65.3, "+"));
  }
  protected function solution($a, $b, $s) {
    return (is_int($a) || is_float($a)) && (is_int($b) || is_float($b)) && array_search($s, ["+", "-", "*", "/"]) !== false ? eval("return $a $s $b;") : "unknown value";
  }
  public function testRandom() {
    for ($i = 0; $i < 1e3; $i++) $this->assertEquals($this->solution($a = rand(1, 1e3), $b = rand(1, 1e3), $s = ["+", "-", "*", "/", "**", "&", "x", "divide"][rand(0, 7)]), calculator($a, $b, $s));
  }
}