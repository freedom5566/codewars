<?php

use PHPUnit\Framework\TestCase;
require "./a.php";
class IsPalindromeTest extends TestCase
{
  /**
   * @dataProvider randomized
   */
  public function testRandom($word)
  {
    $this->assertTrue(is_palindrome($word));  
  }
  
  public function randomized()
  {
    $al = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!_-.*@;,:";
    
    $list = [];
    
    for ($i=0; $i<200; $i++) {
      $word = "";
      $len = rand(0, 100);
      for ($j=0; $j<$len; $j++) {
        $word .= $al[rand(0, strlen($al)-1)];
      }
      
      $list[] = $word . strrev($word);
    }
    
    return $list;
  }
}