<?php
use PHPUnit\Framework\TestCase;
require "./best.php";
class MyTestCases extends TestCase{
    public function testStaticOperations(){
      $this->assertEquals("15-20", datingRange(17));
      $this->assertEquals("27-66", datingRange(40));
      $this->assertEquals("14-16", datingRange(15));
      $this->assertEquals("24-56", datingRange(35));
      $this->assertEquals("9-11", datingRange(10));
      
      $this->assertEquals("33-92", datingRange(53));
      $this->assertEquals("16-24", datingRange(19));
      $this->assertEquals("10-13", datingRange(12));
      $this->assertEquals("6-7", datingRange(7));
      $this->assertEquals("23-52", datingRange(33));
    }
    function solution($age) {
      if ($age <= 14){
        $min = floor($age * 0.90);
        $max = floor($age * 1.10);
      }
      else{
        $min = floor($age/2) + 7;
        $max = 2 * ($age - 7);
      }
      return "{$min}-{$max}";
    }
    public function testRandomOperations() {
        for($i = 0; $i < 50; $i++) {
            $age = rand(1, 100);
            $sol = datingRange($age);
            $ans = $this->solution($age);
            $this->assertEquals($ans, $sol);
            //print ("Testing {$age} = {$ans}<br/>");
        }
    }
}