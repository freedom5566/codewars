<?php

use PHPUnit\Framework\TestCase;
require "./a.php";

class RemoveExclamationMarksTestCase extends TestCase
{
    /**
     * @dataProvider examplesProvider
     */
    public function testRemoveExclamationMarks($example, $expected) {
        $this->assertEquals($expected, remove_exclamation_marks($example));
    }
    
    public function examplesProvider() {
        $random = [$this->randomString(), $this->randomString(), $this->randomString(), $this->randomString()];
        $test_string = $random[0] . '!' . $random[1] . ' ' . $random[2] . '!' . $random[3];
        $expected = $random[0] . $random[1] . ' ' . $random[2] . $random[3];
        return [
            ['Hello World!', 'Hello World'],
            ['Hello World!!!', 'Hello World'],
            ['Hi! Hello!', 'Hi Hello'],
            [$test_string, $expected],
        ];
    }

    protected function randomString() {
        $string = '';
        $characters = implode('', array_merge(range('A', 'Z'), range('a', 'z')));
        for ($i = 0; $i < 10; $i++) {
            $string .= $characters[mt_rand(0, strlen($characters) - 1)];
        }
        return $string;
    }
 
}