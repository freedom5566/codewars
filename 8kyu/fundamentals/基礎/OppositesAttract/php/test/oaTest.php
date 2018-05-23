<?php

use PHPUnit\Framework\TestCase;
require "./a.php";

class MyTestCases extends TestCase
{
    public function testExample() {
        $this->assertTrue(lovefunc(1, 4));
        $this->assertFalse(lovefunc(2, 2));
        $this->assertTrue(lovefunc(0, 1));
        $this->assertFalse(lovefunc(0, 0));
    }
    
    /**
     * @dataProvider additionProvider
     */
    public function testRandom($a, $b, $expected)
    {
        $this->assertSame($expected, lovefunc($a, $b));
    }
    
    public function additionProvider()
    {
        $data = [];
        for ($i = 0; $i < 20; $i++) {
            $a = rand(0, 100);
            $b = rand(0, 100);
            $data[] = [$a, $b, ($a % 2 !== $b % 2)];
        }
        return $data;
    }
}