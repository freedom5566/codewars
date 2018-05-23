<?php

use PHPUnit\Framework\TestCase;
require "./a.php";

class MyFirstKataTest extends TestCase {
  public function testFixed() {
    $this->assertEquals(3 % 5 + 5 % 3, my_first_kata(3, 5));
    $this->assertEquals(false, my_first_kata("hello", 3));
    $this->assertEquals(false, my_first_kata(67, "bye"));
    $this->assertEquals(false, my_first_kata(true, true));
    $this->assertEquals(107 % 314 + 314 % 107, my_first_kata(314, 107));
    $this->assertEquals(9 % 19483 + 19483 % 9, my_first_kata(19483, 9));
  }
  public function testRandom() {
    for ($i = 0; $i < 1e5; $i++) $this->assertEquals(($a = 1 + 1000 * lcg_value()) % ($b = 1 + 1000 * lcg_value()) + $b % $a, my_first_kata($a, $b));
  }
}