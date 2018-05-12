<?php

use PHPUnit\Framework\TestCase;
require "./a.php";

class MyTestCases extends TestCase
{
    /**
     * @dataProvider exampleProvider
     */
    public function testExample($haystack, $expected)
    {
        $this->assertSame($expected, findNeedle($haystack));
    }
    
    public function exampleProvider()
    {
        return [
            [
                ['3', '123124234', null, 'needle', 'world', 'hay', 2, '3', true, false],
                'found the needle at position 3'
            ],
            [
                ['283497238987234', 'a dog', 'a cat', 'some random junk', 'a piece of hay', 'needle', 'something somebody lost a while ago'],
                'found the needle at position 5'
            ],
            [
                [1,2,3,4,5,6,7,8,8,7,5,4,3,4,5,6,67,5,5,3,3,4,2,34,234,23,4,234,324,324,'needle',1,2,3,4,5,5,6,5,4,32,3,45,54],
                'found the needle at position 30'
            ],
        ];
    }
    
    /**
     * @dataProvider randomProvider
     */
    public function testRandom($haystack, $expected)
    {
        $this->assertSame($expected, findNeedle($haystack));
    }
    
    public function randomProvider()
    {
        $data = [];
        for ($i = 0; $i < 20; $i++) {
            $arr = [];
            for ($j = 0; $j < 20; $j++) {
                $arr[] = (string)rand(0, 100);
            }
            $rndKey = array_rand($arr);
            $arr[$rndKey] = 'needle';
            $data[] = [$arr, "found the needle at position {$rndKey}"];
        }
        return $data;
    }
}