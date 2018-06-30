<?php
use PHPUnit\Framework\TestCase;
require "./a.php";

class MyTestCases extends TestCase
{
    public function testhHelloWorld() {
      $this->assertEquals("hello world!", greet());
    }
}