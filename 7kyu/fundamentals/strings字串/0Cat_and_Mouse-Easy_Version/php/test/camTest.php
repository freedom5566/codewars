<?php

use PHPUnit\Framework\TestCase;
require "./preg.php";
class CatAndMouseTest extends TestCase {
    public function testExamples() {
      $this->assertEquals("Escaped!", cat_mouse("C....m"));
      $this->assertEquals("Caught!", cat_mouse("C..m"));
      $this->assertEquals("Escaped!", cat_mouse("C.....m"));
    }
    public function testFixed() {
      $this->assertEquals("Caught!", cat_mouse("Cm"));
      $this->assertEquals("Caught!", cat_mouse("C.m"));
      $this->assertEquals("Caught!", cat_mouse("C...m"));
      $this->assertEquals("Escaped!", cat_mouse("C......m"));
      $this->assertEquals("Escaped!", cat_mouse("C.......m"));
    }
    protected function solution(string $s): string {
      return (strlen($s) <= 5 ? "Caught" : "Escaped") . "!";
    }
    protected function randomString(): string {
      return "C" . str_repeat(".", rand(0, 6)) . "m";
    }
    public function testRandom() {
      for ($i = 0; $i < 1e3; $i++) $this->assertEquals($this->solution($s = $this->randomString()), cat_mouse($s));
    }
}