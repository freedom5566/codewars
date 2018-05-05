<?php

use PHPUnit\Framework\TestCase;
require "./a.php";

class FakeBinTest extends TestCase {
    public function testExamples() {
      $this->assertEquals('01011110001100111', fake_bin('45385593107843568'));
      $this->assertEquals('101000111101101', fake_bin('509321967506747'));
      $this->assertEquals('011011110000101010000011011', fake_bin('366058562030849490134388085'));
    }
    public function testFixed() {
      $this->assertEquals('01011110001100111', fake_bin('45385593107843568'));
      $this->assertEquals('101000111101101', fake_bin('509321967506747'));
      $this->assertEquals('011011110000101010000011011', fake_bin('366058562030849490134388085'));
      $this->assertEquals('01111100', fake_bin('15889923'));
      $this->assertEquals('100111001111', fake_bin('800857237867'));
      $this->assertEquals('0000011111', fake_bin('0123456789'));
      $this->assertEquals('1111100000', fake_bin('9876543210'));
      $this->assertEquals('0101010101011001', fake_bin('2718281828459045'));
      $this->assertEquals('0000110110111110', fake_bin('3141592653589793'));
      $this->assertEquals('0000111110', fake_bin('1234567890'));
    }
    protected function solution(string $s): string {
      return preg_replace('/[5-9]/', "1", preg_replace('/[1-4]/', "0", $s));
    }
    protected function randomNumericString(): string {
      return implode(array_map(function () {return rand(0, 9);}, range(1, rand(10, 100))));
    }
    public function testRandom() {
      for ($i = 0; $i < 1e3; $i++) $this->assertEquals($this->solution($s = $this->randomNumericString()), fake_bin($s));
    }
  }