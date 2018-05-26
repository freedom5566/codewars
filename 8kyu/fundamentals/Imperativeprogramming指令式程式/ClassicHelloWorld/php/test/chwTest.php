<?php


use PHPUnit\Framework\TestCase;
require "./a.php";

class SolutionTestCases extends TestCase
{
    public function testPrintHelloWorld() {
      $this->expectOutputString('Hello World!');
      $this->assertNull(Solution::main());
    }
    
    public function testYouShouldNotProcessArguments1() {
      $this->expectOutputString('Hello World!');
      $this->assertNull(Solution::main('hello'));
    }
    
    public function testYouShouldNotProcessArguments2() {
      $this->expectOutputString('Hello World!');
      $this->assertNull(Solution::main(0));
    }
    
    public function testYouShouldNotProcessArguments3() {
      $this->expectOutputString('Hello World!');
      $this->assertNull(Solution::main('hello', 0));
    }
}