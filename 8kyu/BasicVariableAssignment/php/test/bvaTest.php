<?php

use PHPUnit\Framework\TestCase;
require "./a.php";


class MyTestCases extends TestCase
{
    public function testName() {
        global $name;
        $this->assertSame('codewa.rs', $name);
    }
}