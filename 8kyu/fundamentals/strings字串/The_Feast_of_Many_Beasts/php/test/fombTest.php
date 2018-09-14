<?php
use PHPUnit\Framework\TestCase;
require "./a.php";

class FullTests extends TestCase
{
    public function testSimple() {
      $this->assertEquals(feast("great blue heron", "garlic naan"), true);
      $this->assertEquals(feast("chickadee", "chocolate cake"), true);
      $this->assertEquals(feast("brown bear", "bear claw"), false);
    }
    
    public function testRandom(){
      $n = 1000;
      $r = $this->generateRandomTests($n);
      $val = array(0,0);
      
      for($i = 0; $i < $n; $i++){
        $this->assertEquals(feast($r[0][$i], $r[1][$i]), $r[2][$i]);
      }
    }
    
    public function generateRandomTests($n){
      $r = array(array(), array(), array());
      
      for($i = 0; $i < $n; $i++){
        $r[0][$i] = substr(md5(rand()), 0, 7);
        $r[1][$i] = substr(md5(rand()), 0, 7);
        // Correct the probabilities of true/false to around 50% each
        if (rand(0,1)){
          $r[1][$i] = substr($r[0][$i], 0, 1) . $r[1][$i] . substr($r[0][$i], -1, 1);
        }
        $r[2][$i] = (($r[0][$i][0] === $r[1][$i][0]) && ($r[0][$i][strlen($r[0][$i]) - 1] === $r[1][$i][strlen($r[1][$i]) - 1]));
      }
      
      return $r;
    }
}