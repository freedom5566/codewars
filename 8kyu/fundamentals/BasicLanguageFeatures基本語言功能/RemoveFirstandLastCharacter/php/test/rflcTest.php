<?php

use PHPUnit\Framework\TestCase;
require "./a.php";
class RemoveCharTest extends TestCase {
  public function testFixed() {
    $this->assertEquals('loquen', remove_char('eloquent'));
    $this->assertEquals('ountr', remove_char('country'));
    $this->assertEquals('erso', remove_char('person'));
    $this->assertEquals('lac', remove_char('place'));
  }
  protected function solution(string $s): string {
    return substr($s, 1, strlen($s) - 2);
  }
  protected function randomString(): string {
    return implode(array_map(function () {return chr(rand(0, 127));}, range(1, rand(2, 25))));
  }
  public function testRandom() {
    for ($i = 0; $i < 1e3; $i++) $this->assertEquals($this->solution($s = $this->randomString()), remove_char($s));
  }
}