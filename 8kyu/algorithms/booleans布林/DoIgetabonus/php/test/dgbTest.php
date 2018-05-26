<?php


use PHPUnit\Framework\TestCase;
require "./a.php";
class MyTestCases extends TestCase
{
    /**
     * @dataProvider basicProvider
     */
    public function testBasic($salary, $bonus, $expected) {
        $this->assertSame($expected, bonusTime($salary, $bonus));
    }
    
    public function basicProvider()
    {
        return [
            [10000, true, '$100000'],
            [25000, true, '$250000'],
            [10000, false, '$10000'],
            [60000, false, '$60000'],
            [2, true, '$20'],
            [78, false, '$78'],
            [67890, true, '$678900'],
        ];
    }
    
    /**
     * @dataProvider randomProvider
     */
    public function testRandom($salary, $bonus, $expected) {
        $this->assertSame($expected, bonusTime($salary, $bonus), 'It should work for random inputs too');
    }
    
    public function randomProvider()
    {
        $data = [];
        for ($i = 0; $i < 10; $i++) {
            $bonus = (bool)rand(0, 1);
            $salary = rand(1,1000);
            $expected = '$' . ($salary * ($bonus ? 10 : 1));
            $data[] = [$salary, $bonus, $expected];
        }
        return $data;
    }
}