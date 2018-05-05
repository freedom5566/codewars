<?php

use PHPUnit\Framework\TestCase;
require "./a.php";
class testExample extends TestCase
{
  private function check($year)
  {
    return (int)(($year-1)/100+1);
  }
  public function testBasic()
  {
    $this->assertEquals(21, centuryFromYear(2018));
    $this->assertEquals(15, centuryFromYear(1455));
    $this->assertEquals(18, centuryFromYear(1703));
    $this->assertEquals(18, centuryFromYear(1800));
  }
  public function testRandom()
  {
    for ($i = 0; $i < 100; $i++)
    {
      $n = rand(100, 1000000);
      $this->assertEquals($this->check($n), centuryFromYear($n));
    }
  }
}