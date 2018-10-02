<?php
use PHPUnit\Framework\TestCase;
require "./a.php";
class ProductTest extends TestCase {
    public function testFixed() {
      $this->assertEquals(540, product([5, 4, 1, 3, 9]));
      $this->assertEquals(-672, product([-2, 6, 7, 8]));
      $this->assertEquals(10, product([10]));
      $this->assertEquals(0, product([0, 2, 9, 7]));
      $this->assertNull(product(null));
      $this->assertNull(product([]));
    }
    protected function solution($a) {
      return is_null($a) || count($a) === 0 ? NULL : array_product($a);
    }
    protected function randomArray(): array {
      return array_map(function () {return rand(-10, 10);}, range(1, rand(1, 9)));
    }
    public function testRandom() {
      foreach (range(1, 1e3) as $_) $this->assertEquals($this->solution($a = $this->randomArray()), product($a));
    }
  }