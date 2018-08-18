<?php
use PHPUnit\Framework\TestCase;
require "./strtr.php";
class ReplaceDotsTest extends TestCase {
    public function testExample() {
      $this->assertEquals('one-two-three', replace_dots('one.two.three'));
    }
    public function testFixed() {
      $this->assertEquals('', replace_dots(''), 'Your solution should work with an empty string');
      $this->assertEquals('no dots', replace_dots('no dots'), 'Your solution should work with a string containing no dots');
      $this->assertEquals('---', replace_dots('...'), 'Your solution should work with a string consisting of only dots');
      $this->assertEquals('---', replace_dots('---'), 'Your solution should just leave all dashes as is');
      $this->assertEquals('codewars-com', replace_dots('codewars.com'));
      $this->assertEquals('preview-codewars-com', replace_dots('preview.codewars.com'));
      $this->assertEquals('github-com/Codewars', replace_dots('github.com/Codewars'));
      $this->assertEquals('github-com/Codewars/codewars-com', replace_dots('github.com/Codewars/codewars.com'));
      $this->assertEquals('github-com/Codewars/codewars-runner-cli', replace_dots('github.com/Codewars/codewars-runner-cli'));
    }
    protected function solution(string $s): string {
      return preg_replace('/\./', '-', $s);
    }
    protected function randomString(): string {
      return implode(array_map(function () {return 'abcdefghijklmnopqrstuvwxyz0123456789.-'[rand(0, 37)];}, range(1, rand(100, 1e3))));
    }
    public function testRandom() {
      foreach (range(1, 1e3) as $_) $this->assertEquals($this->solution($s = $this->randomString()), replace_dots($s));
    }
  }