<?php

use PHPUnit\Framework\TestCase;
require "./a.php";

class ReversedStringsTest extends TestCase {
    public function testExamples() {
      $this->assertEquals("dlrow", solution("world"));
      $this->assertEquals("olleh", solution("hello"));
      $this->assertEquals("", solution(""));
      $this->assertEquals('h', solution("h"));
    }
    public function testFixed() {
      $this->assertEquals(".desu reve ev'I etis tseb eht si srawedoC", solution("Codewars is the best site I've ever used."));
      $this->assertEquals("!reve egaugnal gnitpircs tseb eht si PHP", solution("PHP is the best scripting language ever!"));
      $this->assertEquals(".egaugnal gnimmargorp ralupop a osla si tpircsavaJ", solution("Javascript is also a popular programming language."));
      $this->assertEquals("): nuf si sgnirts gnisreveR", solution("Reversing strings is fun :)"));
      $this->assertEquals("); ysae si sgnirts gnisreveR", solution("Reversing strings is easy ;)"));
    }
    protected function randomToken() {
      return implode(array_map(function () {return "abcdefghijklmnopqrstuvwxyz0123456789"[rand(0, 35)];}, range(1, 20)));
    }
    protected function solution($s) {
      return strrev($s);
    }
    public function testRandom() {
      for ($i = 0; $i < 10000; $i++) $this->assertEquals($this->solution($s = $this->randomToken()), solution($s));
    }
  }