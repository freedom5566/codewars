<?php

use PHPUnit\Framework\TestCase;
require "./a.php";

// PHPUnit Test Examples:
// TODO: Replace examples and use TDD development by writing your own tests
class MyTestCases extends TestCase
{
    // test function names should start with "test"
    public function testThatSomethingShouldHappen() {
        $this->assertEquals(3, getAge("3 years old") );
        $this->assertEquals(4, getAge("4 years old") );
        $this->assertEquals(5, getAge("5 years old") );
        $this->assertEquals(6, getAge("6 years old") );
        $this->assertEquals(7, getAge("7 years old") );
        $this->assertEquals(8, getAge("8 years old") );
        $this->assertEquals(9, getAge("9 years old") );
    }
}