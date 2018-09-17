<?php
use PHPUnit\Framework\TestCase;
require "./a.php";
class RemoveTest extends TestCase {
  public function testDescriptionExamples() {
    $this->assertEquals("Hi", remove("Hi!"));
    $this->assertEquals("Hi!!", remove("Hi!!!"));
    $this->assertEquals("!Hi", remove("!Hi"));
    $this->assertEquals("!Hi", remove("!Hi!"));
    $this->assertEquals("Hi! Hi", remove("Hi! Hi!"));
    $this->assertEquals("Hi", remove("Hi"));
  }
  public function testFixed() {
    $this->assertEquals("Hello myjinxin2015, my name is Donald", remove("Hello myjinxin2015, my name is Donald!"));
    $this->assertEquals("Hello myjinxin2015, my name is Donald.", remove("Hello myjinxin2015, my name is Donald."), "Only exclamation marks should be removed from the end of the string; your function should not remove a full stop from the end of the string.");
    $this->assertEquals("Hello myjinxin2015, my name is Donald!!!!", remove("Hello myjinxin2015, my name is Donald!!!!!"), "Your function should only remove exactly 1 exclamation mark from the end of the string.");
    $this->assertEquals("Hello myjinxin2015, my name is Donald!  How are you?", remove("Hello myjinxin2015, my name is Donald!  How are you?"), "Any exclamation marks not at the end of the string should be left intact");
    $this->assertEquals("!!!!!!?", remove("!!!!!!?"));
  }
  protected function randomString(): string {
    return implode(array_map(function () {return "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.,?!!!!!!!!!!!"[rand(0, 75)];}, range(1, rand(100, 1e3))));
  }
  protected function solution(string $s): string {
    return preg_replace('/!$/', "", $s);
  }
  public function testRandom() {
    $start_time2 = microtime(true);
    for ($i = 0; $i < 2e3; $i++) $this->assertEquals($this->solution($s = $this->randomString()), remove($s));
    $end_time2 = microtime(true);
    echo $end_time2-$start_time2;
  }
}