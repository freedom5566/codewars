<?php

use PHPUnit\Framework\TestCase;
require "./a.php";

// PHPUnit Test Examples:
// TODO: Replace examples and use TDD development by writing your own tests
class MyTestCases extends TestCase {
  public function testBasics() {
    $this->assertEquals(multiply(1, 1), 1);
    $this->assertEquals(multiply(2, 3), 6);
    $this->assertEquals(multiply(3, 5), 15);
    $this->assertEquals(multiply(5, 3), 15);
  }
  public function testRandom() {
    for ($i = 0; $i < 100; $i++) {
      $a = 1 + ~~(20 * lcg_value());
      $b = 1 + ~~(20 * lcg_value());
      $this->assertEquals(multiply($a, $b), $a * $b);
    }
  }
}