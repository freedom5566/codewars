<?php
use PHPUnit\Framework\TestCase;
require "./a.php";

class chromosomeCheck extends TestCase
{
    public function testBasic() {
      $this->assertEquals(chromosomeCheck("XY"), 'Congratulations! You\'re going to have a son.');
      $this->assertEquals(chromosomeCheck("XX"), 'Congratulations! You\'re going to have a daughter.');
    }
    public function testRandom() {
      $s = "X";
      for ($x = 0; $x < 100; $x++) {
        $s = mt_rand(0,4) < 2 ? $s . "Y" : $s . "X";
        $a = "Congratulations! You're going to have a " . ($s == "XY" ? "son." : "daughter.");
        $this -> assertEquals(chromosomeCheck($s), $a);
        $s = "X";
      }
    }
}