<?php
use PHPUnit\Framework\TestCase;
require "./a.php";
class RemoveTest extends TestCase {
  public function testDescriptionExamples() {
    $this->assertEquals("Hi!", remove("Hi!"));
    $this->assertEquals("Hi!", remove("Hi!!!"));
    $this->assertEquals("Hi!", remove("!Hi"));
    $this->assertEquals("Hi!", remove("!Hi!"));
    $this->assertEquals("Hi Hi!", remove("Hi! Hi!"));
    $this->assertEquals("Hi!", remove("Hi"));
  }
  public function testFixed() {
    $this->assertEquals("Hello myjinxin2015, my name is Donald!", remove("Hello myjinxin2015, my name is Donald!"));
    $this->assertEquals("Hello myjinxin2015, my name is Donald.!", remove("Hello myjinxin2015, my name is Donald."), "You must ensure an exclamation mark at the end of the string even if the string ends in another punctuation");
    $this->assertEquals("Hello myjinxin2015, my name is Donald  How old are you?!", remove("Hello myjinxin2015, my name is Donald!  How old are you?"), "The exclamation mark at the middle of the string must be removed and you must ensure an exclamation mark at the end of the string");
    $this->assertEquals("Hello myjinxin2015, my name is Donald  How old are you?  Nothing, I'm just curious ... !", remove("Hello myjinxin2015, my name is Donald!!!  How old are you?  Nothing, I'm just curious ... "));
    $this->assertEquals("?????!", remove("!!!!!!!?!!!!!!!!!!!!!!!!!!!!!!??!?!!?!!!!!!!"), "Your function must ensure exactly 1 exclamation mark at the end of the string, no more, no less");
    $this->assertEquals("!", remove(""), "Your function should work for an empty string");
    $this->assertEquals("!", remove("!"));
    $this->assertEquals("!", remove("!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!"));
  }
  protected function randomString(): string {
    return implode(array_map(function () {return "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.,?!!!!!!!!!!!"[rand(0, 75)];}, range(1, rand(100, 1e3))));
  }
  protected function solution(string $s): string {
    return preg_replace('/!/', "", $s) . "!";
  }
  public function testRandom() {
    for ($i = 0; $i < 1e3; $i++) $this->assertEquals($this->solution($s = $this->randomString()), remove($s));
  }
}