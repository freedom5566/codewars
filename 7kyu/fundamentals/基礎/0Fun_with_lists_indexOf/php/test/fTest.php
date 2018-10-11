<?php

use PHPUnit\Framework\TestCase;
require "./a.php";
class IndexOfTest extends TestCase {
  public function testExamples() {
    $this->assertEquals(-1, index_of(NULL, 17)); // NULL
    $this->assertEquals(1, index_of(new Node(1, new Node(2, new Node(3))), 2)); // 1 -> 2 -> 3
    $this->assertEquals(0, index_of(new Node('aaa', new Node('b', new Node('abc'))), 'aaa')); // 'aaa' -> 'b' -> 'abc'
    $this->assertEquals(0, index_of(new Node(17, new Node('17', new Node(1.2))), 17)); // 17 -> '17' -> 1.2
    $this->assertEquals(1, index_of(new Node(17, new Node('17', new Node(1.2))), '17')); // 17 -> '17' -> 1.2
    $this->assertEquals(2, index_of(new Node(1, new Node(2, new Node(3, new Node(3)))), 3)); // 1 -> 2 -> 3 -> 3
  }
  public function testFixed() {
    $this->assertEquals(-1, index_of(new Node(1, new Node(2, new Node(3))), 4));
    $this->assertEquals(-1, index_of(new Node('aaa', new Node('b', new Node('abc'))), 'c'));
    $this->assertEquals(0, index_of(new Node(1, new Node(1, new Node(2, new Node(3, new Node(5, new Node(8, new Node(13))))))), 1));
    $this->assertEquals(2, index_of(new Node(1, new Node(1, new Node(2, new Node(3, new Node(5, new Node(8, new Node(13))))))), 2));
    $this->assertEquals(3, index_of(new Node(1, new Node(1, new Node(2, new Node(3, new Node(5, new Node(8, new Node(13))))))), 3));
    $this->assertEquals(4, index_of(new Node(1, new Node(1, new Node(2, new Node(3, new Node(5, new Node(8, new Node(13))))))), 5));
    $this->assertEquals(5, index_of(new Node(1, new Node(1, new Node(2, new Node(3, new Node(5, new Node(8, new Node(13))))))), 8));
    $this->assertEquals(6, index_of(new Node(1, new Node(1, new Node(2, new Node(3, new Node(5, new Node(8, new Node(13))))))), 13));
    $this->assertEquals(-1, index_of(new Node(1, new Node(1, new Node(2, new Node(3, new Node(5, new Node(8, new Node(13))))))), 21));
    $this->assertEquals(-1, index_of(new Node(1, new Node(1, new Node(2, new Node(3, new Node(5, new Node(8, new Node(13))))))), 34));
    $this->assertEquals(8, index_of(new Node(1, new Node(1, new Node(2, new Node(3, new Node(5, new Node(8, new Node(13, new Node(21, new Node(34, new Node(55, new Node(89))))))))))), 34));
  }
  protected function solution($h, $v) {
    if (is_null($h)) return -1;
    if ($h->data === $v) return 0;
    $next_result = $this->solution($h->next, $v);
    return $next_result === -1 ? -1 : 1 + $next_result;
  }
  protected function randomList() {
    $list = NULL;
    $limit = rand(0, 25);
    for ($i = 0; $i < $limit; $i++) {
      $list = new Node(rand(0, 100), $list);
    }
    return $list;
  }
  public function testRandom() {
    for ($i = 0; $i < 1e3; $i++) $this->assertEquals($this->solution($h = $this->randomList(), $v = rand(0, 100)), index_of($h, $v));
  }
}