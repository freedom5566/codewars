<?php

use PHPUnit\Framework\TestCase;
require "./a.php";

class VowelTestCase extends TestCase
{
    public function testBasicReplaces()
    {
        $this->assertEquals([118,"u",120,121,"u",98,122,"a",120,106,104,116,113,114,113,120,106], isVow([118,117,120,121,117,98,122,97,120,106,104,116,113,114,113,120,106]));
        $this->assertEquals(["e",121,110,113,113,103,121,121,"e",107,103], isVow([101,121,110,113,113,103,121,121,101,107,103]));
        $this->assertEquals([118,103,110,109,104,106], isVow([118,103,110,109,104,106]));
        $this->assertEquals([107,99,110,107,118,106,112,102], isVow([107,99,110,107,118,106,112,102]));
        $this->assertEquals([100,100,116,"i","u",121], isVow([100,100,116,105,117,121]));
    }

    public function testRandomValues()
    {
        for ($i = 0; $i < 20; $i++) {
            $values = array_fill(0, random_int(5, 15), 0);

            $array = array_map(function () {
                return random_int(97, 121);
            }, $values);

            $this->assertEquals($this->solve($array), isVow($array));
        }
    }

    private function solve($input)
    {
        return array_map(function ($code) {
            return in_array($code, [97, 101, 105, 111, 117]) ? chr($code) : $code;
        }, $input);
    }
}