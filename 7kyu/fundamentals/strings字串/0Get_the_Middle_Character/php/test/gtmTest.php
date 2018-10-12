<?php

use PHPUnit\Framework\TestCase;
require "./a.php";
class GetMiddleTests extends TestCase
{
    public function testBasics() {
      $this->assertEquals("es", getMiddle("test"));
      $this->assertEquals("t", getMiddle("testing"));
      $this->assertEquals("dd", getMiddle("middle"));
      $this->assertEquals("A", getMiddle("A"));
    }
    
    public function testRandomInput() {
      for($i = 0; $i < 50; $i++) {
        $mid = generateRandomString(1);
        if(rand(0, 1)) $mid = $mid . $mid;
        $ends = rand(0, 4);
        $input = generateRandomString($ends) . $mid . generateRandomString($ends);
        $this->assertEquals($mid, getMiddle($input), "Testing with: $input");
      }
    }
}

// from http://stackoverflow.com/a/4356295/145185
function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}