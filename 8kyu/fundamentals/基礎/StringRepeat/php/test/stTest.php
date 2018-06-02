<?php

use PHPUnit\Framework\TestCase;
require "./a.php";
class MyTestCases extends TestCase
{
    public function testStaticOperations()
    {
      $this->assertEquals(repeatStr(3, "*"), "***");
      $this->assertEquals(repeatStr(2, "@"), "@@");
      $this->assertEquals(repeatStr(1, "!"), "!");
    }
    public function testRandomOperations()
    {
      for ($i = 0; $i < 100; $i++)
      {
        $str = "abcdefghijklmnopqrstuvwxyz";
        $sym = mt_rand(0, 25);
        $x = mt_rand(0, 10);
        $this->assertEquals(repeatStr($x, $str[$sym]), str_repeat($str[$sym], $x));
      }
    }
}