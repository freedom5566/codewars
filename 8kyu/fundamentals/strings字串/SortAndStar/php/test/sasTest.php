<?php

use PHPUnit\Framework\TestCase;
require "./clever.php";
class MyTestCases extends TestCase
{
    private $letters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";

    public function testSampleTests() {
      $this->assertEquals('b***i***t***c***o***i***n', twoSort(["bitcoin", "take", "over", "the", "world", "maybe", "who", "knows", "perhaps"]));
      $this->assertEquals('a***r***e', twoSort(["turns", "out", "random", "test", "cases", "are", "easier", "than", "writing", "out", "basic", "ones"])); 
      $this->assertEquals('a***b***o***u***t', twoSort(["lets", "talk", "about", "javascript", "the", "best", "language"])); 
      $this->assertEquals('c***o***d***e', twoSort(["i", "want", "to", "travel", "the", "world", "writing", "code", "one", "day"])); 
      $this->assertEquals('L***e***t***s', twoSort(["Lets", "all", "go", "on", "holiday", "somewhere", "very", "cold"])); 
    }
    
    private function twoSortSolution($s) {
      sort($s);
      return implode('***', str_split($s[0]));
    }
    
    public function testRandomTests() {
      for ($i=0; $i<100; $i++) {
        $st = [];
        $le = rand(1,100);
        for($a=0; $a<10; $a++) {
          $wd = "";
          for($b=0; $b<=$le; $b++) {
            $wd .= $this->letters[rand(0,strlen($this->letters)-1)];
          }
          $st[] = $wd;
        }
        echo "Testing for ['" . implode(", '", $st) . "']<br><br>";
        $re = $this->twoSortSolution($st);
        echo "Expecting " . $re . "<br><br>";
        $this->assertEquals($re, twoSort($st)); 
      }
    }
}