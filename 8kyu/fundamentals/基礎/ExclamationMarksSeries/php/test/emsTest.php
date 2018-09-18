<?php
use PHPUnit\Framework\TestCase;
require "./best.php";
class RemoveTest extends TestCase {
  public function testFixed() {
    $this->assertEquals("Hi", remove("Hi!", 1));
    $this->assertEquals("Hi", remove("Hi!", 100));
    $this->assertEquals("Hi!!", remove("Hi!!!", 1));
    $this->assertEquals("Hi", remove("Hi!!!", 100));
    $this->assertEquals("Hi", remove("!Hi", 1));
    $this->assertEquals("Hi!", remove("!Hi!", 1));
    $this->assertEquals("Hi", remove("!Hi!", 100));
    $this->assertEquals("!!Hi !!hi!!! !hi", remove("!!!Hi !!hi!!! !hi", 1));
    $this->assertEquals("Hi !!hi!!! !hi", remove("!!!Hi !!hi!!! !hi", 3));
    $this->assertEquals("Hi hi!!! !hi", remove("!!!Hi !!hi!!! !hi", 5));
    $this->assertEquals("Hi hi hi", remove("!!!Hi !!hi!!! !hi", 100));
  }
  protected function randomString(): string {
    return implode(array_map(function () {return "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.,?!!!!!!!!!!!"[rand(0, 75)];}, range(1, rand(100, 1e3))));
  }
  protected function solution(string $s, int $n): string {
    return preg_replace('/!/', "", $s, $n);
  }
  public function testRandom() {
    for ($i = 0; $i < 1e3; $i++) $this->assertEquals($this->solution($s = $this->randomString(), $n = rand(1, 100)), remove($s, $n));
  }
}