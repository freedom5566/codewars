<?php

use PHPUnit\Framework\TestCase;
require "./a.php";

class HowMuchILoveYouTest extends TestCase {
    public function testExamples() {
      $this->assertEquals("I love you", how_much_i_love_you(7));
      $this->assertEquals("a lot", how_much_i_love_you(3));
      $this->assertEquals("not at all", how_much_i_love_you(6));
    }
    public function testFixed() {
      $this->assertEquals("I love you", how_much_i_love_you(1));
      $this->assertEquals("a little", how_much_i_love_you(2));
      $this->assertEquals("passionately", how_much_i_love_you(4));
      $this->assertEquals("madly", how_much_i_love_you(5));
      $this->assertEquals("a little", how_much_i_love_you(8));
      $this->assertEquals("a lot", how_much_i_love_you(9));
      $this->assertEquals("passionately", how_much_i_love_you(10));
      $this->assertEquals("madly", how_much_i_love_you(11));
      $this->assertEquals("not at all", how_much_i_love_you(12));
      $this->assertEquals("passionately", how_much_i_love_you(100));
      $this->assertEquals("a little", how_much_i_love_you(500));
      $this->assertEquals("passionately", how_much_i_love_you(1e3));
    }
    protected function solution(int $n): string {
      return ["I love you", "a little", "a lot", "passionately", "madly", "not at all"][($n - 1) % 6];
    }
    public function testRandom() {
      for ($i = 0; $i < 1e3; $i++) $this->assertEquals($this->solution($n = rand(1, 1e6)), how_much_i_love_you($n));
    }
  }