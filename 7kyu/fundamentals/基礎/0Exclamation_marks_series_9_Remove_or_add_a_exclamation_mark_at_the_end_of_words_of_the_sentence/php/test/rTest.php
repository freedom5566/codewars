<?php
class RemoveTest extends TestCase {
    public function testFixed() {
      $this->assertEquals("Hi", remove("Hi!"));
      $this->assertEquals("Hi Hi", remove("Hi! Hi!"));
      $this->assertEquals("Hi Hi!", remove("Hi! Hi"));
      $this->assertEquals("Hi Hi! Hi!!", remove("Hi! Hi Hi!!"));
      $this->assertEquals("!Hi !Hi! !Hi!!", remove("!Hi! !Hi !Hi!!"));
    }
    protected function solution(string $s): string {
      return implode(" ", array_map(function ($w) {return !preg_match('/!$/', $w) ? $w . "!" : (preg_match('/[^!]!$/', $w) ? preg_replace('/!$/', "", $w) : $w);}, explode(" ", $s)));
    }
    protected function randomString(): string {
      return implode(" ", array_map(function () {return implode(array_map(function () {return "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.,?!!!!!!!!!!!"[rand(0, 75)];}, range(1, rand(3, 16))));}, range(1, rand(10, 100))));
    }
    public function testRandom() {
      for ($i = 0; $i < 1e3; $i++) $this->assertEquals($this->solution($s = $this->randomString()), remove($s));
    }
  }