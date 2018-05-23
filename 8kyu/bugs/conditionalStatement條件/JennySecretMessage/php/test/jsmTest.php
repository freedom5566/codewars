<?php

use PHPUnit\Framework\TestCase;
require "./a.php";
class SecretMessageTestCase extends TestCase
{
    /**
     * @dataProvider greetProvider
     */
    public function testGreet($name, $expected) {
        $this->assertEquals($expected, greet($name));
    }
    
    public function greetProvider() {
        return [
            ['Jim', 'Hello, Jim!'],
            ['Jane', 'Hello, Jane!'],
            ['Simon', 'Hello, Simon!'],
            ['Johnny', 'Hello, my love!'],
        ];
    }
}