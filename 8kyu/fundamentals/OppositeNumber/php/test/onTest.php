<?php

use PHPUnit\Framework\TestCase;
require "./a.php";

class OppositeTest extends TestCase {
    public function testThatOppositeWorksForExamplesProvidedInDescription() {
      $this->assertEquals(opposite(1), -1);
      $this->assertEquals(opposite(14), -14);
      $this->assertEquals(opposite(-34), 34);
    }
    public function testThatOppositeWorksForMoreFixedTests() {
      $this->assertEquals(opposite(123), -123);
      $this->assertEquals(opposite(-123), 123);
      $this->assertEquals(opposite(666), -666);
      $this->assertEquals(opposite(-666), 666);
      $this->assertEquals(opposite(1024), -1024);
      $this->assertEquals(opposite(-1024), 1024);
      $this->assertEquals(opposite(911), -911);
      $this->assertEquals(opposite(-911), 911);
    }
    protected function randomNumber() {
      return ~~(101 * lcg_value());
    }
    public function testThatOppositeWorksForRandomTests() {
      for ($i = 0; $i < 100; $i++) {
        $n = $this->randomNumber();
        $this->assertEquals(opposite($n), -$n);
        $this->assertEquals(opposite(-$n), $n);
      }
    }
  }