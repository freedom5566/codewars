<?php

// PHPUnit Test Examples:
// TODO: Replace examples and use TDD development by writing your own tests
use PHPUnit\Framework\TestCase;
require "./best.php";
class MyTestCases extends TestCase
{
    // test function names should start with "test"
    public function testBasic() {
      $this->assertEquals(reverseSeq(1), [1]);
      $this->assertEquals(reverseSeq(5), [5,4,3,2,1]);
      $this->assertEquals(reverseSeq(6), [6,5,4,3,2,1]);
      $this->assertEquals(reverseSeq(100), range(100, 1));
      $this->assertEquals(reverseSeq(10000), range(10000, 1));
      $this->assertEquals(reverseSeq(100000), range(100000, 1));
      $this->assertEquals(reverseSeq(1000000), range(1000000, 1));
    }

    public function testRandom() {
      $tests = 50;
      while ($tests > 0) {
        $v = rand(1,10000);
        $this->assertEquals(reverseSeq($v), range($v, 1));
        $tests--;
      }

    }
}