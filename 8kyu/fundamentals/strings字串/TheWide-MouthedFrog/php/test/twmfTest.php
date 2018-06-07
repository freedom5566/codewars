<?php

use PHPUnit\Framework\TestCase;
require "./a.php";
class MyTestCases extends TestCase {

public function testBasicExamples() {
    $this->assertEquals(mouth_size('toucan'), 'wide');
    $this->assertEquals(mouth_size('ant bear'), 'wide');
    $this->assertEquals(mouth_size('alligator'), 'small');
}

public function testRandomExamples() {
    $animals = ['alligator', 'ant bear', 'toucan', 'tiger', 'lion', 'giraffe', 'longer than an alli'];
    $callbacks = ['strtolower', 'strtoupper', 'ucfirst'];
    for ($i = 0; $i < 40; $i++) {
        $animal = $animals[array_rand($animals)];
        $callback = $callbacks[array_rand($callbacks)];
        $test_case = call_user_func($callback, $animal);

        $expected = $animal === 'alligator' ? 'small' : 'wide';
        $actual = mouth_size($test_case);
        $message = "Animal: '$test_case' - expected result: '$expected' - actual result: '$actual'";

        $this->assertEquals($expected, $actual, $message);
    }
}
}