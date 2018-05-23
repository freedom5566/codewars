<?php

use PHPUnit\Framework\TestCase;
require "./a.php";

class MyTestCases extends TestCase
{
    public function testExample() {
        $this->assertSame([1,2,3,4,5,6,7,8,9], pipeFix([1,2,3,5,6,8,9]));
        $this->assertSame([1,2,3,4,5,6,7,8,9,10,11,12], pipeFix([1,2,3,12]));
        $this->assertSame([6,7,8,9], pipeFix([6,9]));
        $this->assertSame([-1,0,1,2,3,4], pipeFix([-1,4]));
        $this->assertSame([1,2,3], pipeFix([1,2,3]));
    }
    
    /**
     * @dataProvider randomProvider
     */
    public function testRandom($numbers, $expected) {
        $this->assertSame($expected, pipeFix($numbers));
    }
    
    public function randomProvider()
    {
        $data = [];
        for($i = 0; $i < 100; $i++) {
            $min = rand(0, 10) - rand(0, 10);
            $max = rand(10, 20);

            $expected = [];
            for ($j = $min; $j <= $max; $j++) {
                $expected[] = $j;
            }

            $numbers = [$min];
            while (true) {
                $rnd = $min + rand(1,5);
                if ($rnd >= $max) {
                    break;
                }
                $numbers[] = $rnd;
                $min = $rnd;
            }
            $numbers[] = $max;

            $data[] = [$numbers, $expected];
        }
        return $data;
    }
}