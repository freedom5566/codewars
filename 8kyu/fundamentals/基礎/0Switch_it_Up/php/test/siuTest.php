<?php

use PHPUnit\Framework\TestCase;
require "./a.php";
class MyTestCases extends TestCase
{
    public function test_static_operations()
    {
      $this->assertEquals("One", switch_it_up(1));
      $this->assertEquals("Three", switch_it_up(3));
      $this->assertEquals("Five", switch_it_up(5));
    }
    
    public function test_all_operations()
    {
      for($i = 0; $i <= 9; $i++)
        $this->assertEquals($this->get_result($i), switch_it_up($i));
    }
    
    private function get_result($number)
    {
      switch ($number)
      {
        case 0: return "Zero";
        case 1: return "One";
        case 2: return "Two";
        case 3: return "Three";
        case 4: return "Four";
        case 5: return "Five";
        case 6: return "Six";
        case 7: return "Seven";
        case 8: return "Eight";
        default: return "Nine";
      }
    }
    
}