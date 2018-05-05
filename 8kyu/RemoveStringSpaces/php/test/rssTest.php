<?php

use PHPUnit\Framework\TestCase;
require "./a.php";

class RemoveStringSpacesTest extends TestCase {
  public function testExamples() {
    $this->assertEquals('8j8mBliB8gimjB8B8jlB', no_space('8 j 8   mBliB8g  imjB8B8  jl  B'));
    $this->assertEquals('88Bifk8hB8BB8BBBB888chl8BhBfd', no_space('8 8 Bi fk8h B 8 BB8B B B  B888 c hl8 BhB fd'));
    $this->assertEquals('8aaaaaddddr', no_space('8aaaaa dddd r     '));
  }
  public function testFixed() {
    $this->assertEquals('jfBmgklf8hg88lbe8', no_space('jfBm  gk lf8hg  88lbe8 '));
    $this->assertEquals('8jaam', no_space('8j aam'));
  }
  protected function randomString(): string {
    return implode(array_map(function () {return "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789     "[rand(0, 66)];}, range(1, rand(1, 1000))));
  }
  protected function solution(string $s): string {
    return preg_replace('/ /', "", $s);
  }
  public function testRandom() {
    for ($i = 0; $i < 1e3; $i++) $this->assertEquals($this->solution($s = $this->randomString()), no_space($s));
  }
}