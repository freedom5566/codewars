<?php
class BaublesOnTreeTest extends TestCase {
    public function testDescriptionExamples() {
      $this->assertEquals([5, 5], baubles_on_tree(10, 2));
      $this->assertEquals([1, 1, 1, 1, 1, 0, 0], baubles_on_tree(5, 7));
      $this->assertEquals([3, 3, 2, 2, 2], baubles_on_tree(12, 5));
    }
    public function testFixed() {
      $this->assertEquals([1, 1, 1, 1, 1], baubles_on_tree(5, 5));
      $this->assertEquals("Grandma, we will have to buy a Christmas tree first!", baubles_on_tree(5, 0));
      $this->assertEquals([2, 1, 1, 1, 1], baubles_on_tree(6, 5));
      $this->assertEquals([6, 6, 6, 6, 6, 5, 5, 5, 5], baubles_on_tree(50, 9));
      $this->assertEquals([5, 5, 5, 5], baubles_on_tree(20, 4));
      $this->assertEquals(array_fill(0, 10, 0), baubles_on_tree(0, 10));
    }
    protected function solution(int $a, int $b) {
      return $b === 0 ? "Grandma, we will have to buy a Christmas tree first!" : array_map(function ($e) use ($a, $b) {return ~~($a / $b) + ($e < $a % $b + 1 ? 1 : 0);}, range(1, $b));
    }
    public function testRandom() {
      for ($i = 0; $i < 1e3; $i++) $this->assertEquals($this->solution($a = rand(0, 1e3), $b = rand(0, 1e3)), baubles_on_tree($a, $b));
    }
  }