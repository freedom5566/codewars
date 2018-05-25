<?php

use PHPUnit\Framework\TestCase;
require "./a.php";

class MyTestCases extends TestCase
{
    /**
     * @dataProvider basicProvider
     */
    public function testBasic($number, $expected) {
        $this->assertSame($expected, howManyDalmations($number));
    }
    
    public function basicProvider()
    {
        return [
            [26, "More than a handful!"],
            [8, "Hardly any"],
            [14, "More than a handful!"],
            [80, "Woah that's a lot of dogs!"],
            [100, "Woah that's a lot of dogs!"],
            [101, "101 DALMATIANS!!!"],
        ];
    }
    
    public function sol($number) {
        $dogs = ["Hardly any", "More than a handful!", "Woah that's a lot of dogs!", "101 DALMATIANS!!!"];
        if ($number <= 10) return $dogs[0];
        if ($number <= 50) return $dogs[1];
        if ($number === 101) return $dogs[3];
        return $dogs[2];
    }

    /**
     * @dataProvider randomProvider
     */
    public function testRandom($number, $expected) {
        $this->assertSame($expected, howManyDalmations($number), 'It should work for random inputs too');
    }
    
    public function randomProvider()
    {
        $data = [];
        for ($i = 0; $i < 40; $i++) {
            $number = rand(1, 101);
            $expected = $this->sol($number);
            $data[] = [$number, $expected];
        }
        return $data;
    }
}