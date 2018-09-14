<?php

use PHPUnit\Framework\TestCase;
require "./a.php";
class MyTestCases extends TestCase
{
    private $base = ' abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    public function testSampleTest() {
      $this->assertEquals("Hello, Ryan how are you doing today?", greet('Ryan'));
      $this->assertEquals("Hello, Shingles how are you doing today?", greet('Shingles'));
    }
    
    public function testRandomTest() {
      for($cwtests=0;$cwtests<=100;$cwtests++) {
        $name = "";
        for($tre=0;$tre<=rand(1,30);$tre++) { $name .= $this->base[rand(0, strlen($this->base) - 1)]; }
        //echo "Testing for name: $name<br><br>";
        $qwe = $name;
        $this->assertEquals("Hello, $qwe how are you doing today?", greet($name));
      }
    }
}