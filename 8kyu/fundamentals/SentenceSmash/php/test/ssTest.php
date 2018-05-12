<?php

use PHPUnit\Framework\TestCase;
require "./a.php";

class SmashTest extends TestCase {
    public function testExamples() {
      $this->assertEquals('hello', smash(["hello"]));
      $this->assertEquals('hello world', smash(["hello", "world"]));
    }
    public function testFixed() {
      $this->assertEquals('', smash([]));
      $this->assertEquals('hello amazing world', smash(['hello', 'amazing', 'world']));
      $this->assertEquals('this is a really long sentence', smash(['this', 'is', 'a', 'really', 'long', 'sentence']));
    }
    protected function solution(array $a): string {
      return implode(' ', $a);
    }
    protected function randomArray(): array {
      return array_map(function () {return implode(array_map(function () {return range('a', 'z')[random_int(0, 25)];}, range(1, random_int(3, 16))));}, range(1, random_int(10, 100)));
    }
    public function testRandom() {
      foreach (range(1, 1e3) as $_) $this->assertEquals($this->solution($a = $this->randomArray()), smash($a));
    }
  }