<?php

use PHPUnit\Framework\TestCase;
require "./a.php";
class MyTestCases extends TestCase
{
    public function testExample() {
        $this->assertSame(16, sumArray([6, 2, 1, 8, 10]));
    }

    /**
     * @dataProvider realTestsProvider
     */
    public function testRealTests($expected, $array) {
        $this->assertSame($expected, sumArray($array));
    }
    
    public function realTestsProvider()
    {
        return [
            [17, [6, 0, 1, 10, 10]],
            [-28, [-6, -20, -1, -10, -12]],
            [3, [-6, 20, -1, 10, -12]],
        ];
    }
    
    /**
     * @dataProvider randomDataProvider
     */
    public function testRandomTests($expected, $array) {
        $this->assertSame($expected, sumArray($array));
    }
    
    public function randomDataProvider()
    {
        $data = [];
        for ($i = 0; $i < 10; $i++) {
            $array = [];
            for ($j = 0; $j < 10; $j++) {
                $array[] = rand(0, 1000);
            }
            $expected = $array;
            sort($expected);
            array_pop($expected);
            array_shift($expected);
            $expected = array_sum($expected);
            $data[] = [$expected, $array];
        }
        return $data;
    }
}