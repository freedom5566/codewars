<?php

use PHPUnit\Framework\TestCase;
require "./a.php";

class FormatMoneyTest extends TestCase {
    public function testDescriptionExamples() {
      $this->assertEquals('$39.99', format_money(39.99));
      $this->assertEquals('$3.10', format_money(3.1));
    }
    public function testFixed() {
      $this->assertEquals('$3.00', format_money(3));
      $this->assertEquals('$314.16', format_money(314.16));
      $this->assertNotEquals('$3,027.50', format_money(3027.5), 'Your function should not place a comma (or any other symbol) between the thousands digit and the hundreds digit');
      $this->assertEquals('$3027.50', format_money(3027.5), 'Your function should not place a comma (or any other symbol) between the thousands digit and the hundreds digit');
      $this->assertNotEquals('$1,375,200.00', format_money(1375200));
      $this->assertEquals('$1375200.00', format_money(1375200));
    }
    protected function solution(float $n): string {
      return '$' . number_format($n, 2, '.', '');
    }
    public function testRandom() {
      foreach (range(1, 1e3) as $_) $this->assertEquals($this->solution($n = rand(1, 1e8) / 100), format_money($n));
    }
  }