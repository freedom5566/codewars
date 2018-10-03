<?php

use PHPUnit\Framework\TestCase;
require "./clever.php";

class MyTestCases extends TestCase
{
    private $letters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVQWXYZ";

    public function testSampleTests() {
      $this->assertEquals(true, isIsogram("Dermatoglyphics"));
      $this->assertEquals(true, isIsogram("isogram"));
      $this->assertEquals(false, isIsogram("aba"), "same chars may not be adjacent");
      $this->assertEquals(false, isIsogram("moOse"), "same chars may not be same case");
      $this->assertEquals(false, isIsogram("isIsogram"));
      $this->assertEquals(true, isIsogram(""), "an empty string is a valid isogram");
    }
    
    function isIsogramSolution($string) {
      return array_unique(str_split(strtolower($string))) === str_split(strtolower($string));
    }
    
    public function testRandomTests() {
      for ($cwtests=0; $cwtests<=100; $cwtests++) {
        $qwe1 = "";
        $qwe2 = "";
        for ($tr=0; $tr=rand(0,25); $tr++) {
          $l = $this->letters[rand(0, strlen($this->letters)-1)];
          $qwe1 .= $l;
          $qwe2 .= $l;
        }
        echo "Testing for '" . $qwe1 . "'<br><br>";
        $this->assertEquals($this->isIsogramSolution($qwe1), isIsogram($qwe2));
      }
    }
}
