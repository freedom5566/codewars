<?php

use PHPUnit\Framework\TestCase;
require "./a.php";
class CheckAliveTestCases extends TestCase
{
    public function testShouldReturnTheProperValues() {
        $this->assertSame(true, checkAlive(10));
        $this->assertSame(true, checkAlive(5));
        $this->assertSame(false, checkAlive(0));
        $this->assertSame(false, checkAlive(-10));
    }
}