<?php

use PHPUnit\Framework\TestCase;
require "./a.php";

class MyTestCases extends TestCase
{
    public function testExample() {
        $this->assertSame(2, remainder(17,5), 'Returned value should be the value left over after dividing as much as possible.');
        $this->assertSame(remainder(13, 72), remainder(72, 13), 'The order the arguments are passed should not matter.');
        $this->assertSame(null, remainder(1, 0), 'Divide by zero should return null');
        $this->assertSame(null, remainder(0, 0), 'Divide by zero should return null');
        $this->assertSame(null, remainder(0, 1), 'Divide by zero should return null');
        $this->assertSame(null, remainder(0, -1), 'Divide by zero should return null');
        $this->assertSame(0, remainder(-13, -13), 'Should handle negative numbers');
        $this->assertSame(40, remainder(-60, 340), 'Should handle negative numbers');
    }
    
    /**
     * @dataProvider randomProvider
     */
    public function testRandom($a, $b, $expected) {
        $this->assertSame($expected, remainder($a, $b));
    }
    
    public function randomProvider()
    {
        $data = [];
        for ($i = 0; $i < 10; $i++) {
            $a = rand(0, 100);
            $b = rand(0, 100);
            $expected = (!$a || !$b) ? null : max($a, $b) % min($a, $b);  
            $data[] = [$a, $b, $expected];
        }
        return $data;
    }
}