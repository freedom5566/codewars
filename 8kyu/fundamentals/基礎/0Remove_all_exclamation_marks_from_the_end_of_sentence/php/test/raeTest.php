<?php
use PHPUnit\Framework\TestCase;
require "./a.php";
class RemoveTest extends TestCase {
    public function testDescriptionExamples() {
      $this->assertEquals("Hi", remove("Hi!"));
      $this->assertEquals("Hi", remove("Hi!!!"));
      $this->assertEquals("!Hi", remove("!Hi"));
      $this->assertEquals("!Hi", remove("!Hi!"));
      $this->assertEquals("Hi! Hi", remove("Hi! Hi!"));
      $this->assertEquals("Hi", remove("Hi"));
    }
    public function testFixed() {
      $this->assertEquals("Hello myjinxin2015, my name is Donald", remove("Hello myjinxin2015, my name is Donald"));
      $this->assertEquals("Hello myjinxin2015, my name is Donald", remove("Hello myjinxin2015, my name is Donald!"));
      $this->assertEquals("Hello myjinxin2015, my name is Donald", remove("Hello myjinxin2015, my name is Donald!!!!!"), "Your function should remove *all* exclamation marks at the end of the string");
      $this->assertEquals("Hello myjinxin2015, my name is Donald!!!!!  Nice to meet you", remove("Hello myjinxin2015, my name is Donald!!!!!  Nice to meet you!"), "Your function should only remove all exclamation marks at the very end of the string");
      $this->assertEquals("Hello myjinxin2015, my name is Donald!  Nice to meet you", remove("Hello myjinxin2015, my name is Donald!  Nice to meet you!!!!!!!!!!"));
      $this->assertEquals("Hello myjinxin2015, my name is Donald!!!  Nice to meet you.", remove("Hello myjinxin2015, my name is Donald!!!  Nice to meet you."), "Your function should do nothing if the last character of the string is a punctuation other than an exclamation mark");
    }
    protected function randomString(): string {
      return implode(array_map(function () {return "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.,?!!!!!!!!!!!"[rand(0, 75)];}, range(1, rand(100, 1e3))));
    }
    protected function solution(string $s): string {
      return preg_replace('/!+$/', "", $s);
    }
    public function testRandom() {
      for ($i = 0; $i < 1e3; $i++) $this->assertEquals($this->solution($s = $this->randomString()), remove($s));
    }
  }