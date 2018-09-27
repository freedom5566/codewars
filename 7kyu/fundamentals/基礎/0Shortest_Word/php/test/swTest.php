<?php

use PHPUnit\Framework\TestCase;
require "./best.php";
class MyTestCases extends TestCase
{
    public function testBasics() {
      $this->assertEquals(findShort("bitcoin take over the world maybe who knows perhaps"), 3);
      $this->assertEquals(findShort("turns out random test cases are easier than writing out basic ones"), 3);
      $this->assertEquals(findShort("lets talk about javascript the best language"), 3);
      $this->assertEquals(findShort("i want to travel the world writing code one day"), 1);
      $this->assertEquals(findShort("Lets all go on holiday somewhere very cold"), 2);
    }

}