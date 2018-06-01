<?php

use PHPUnit\Framework\TestCase;
require "./a.php";
class MyTestCases extends TestCase
{
    public function testExample()
    {
        $this->assertSame(false, periodIsLate(new DateTime('2016-07-13'), new DateTime('2016-08-16'), 35));
        $this->assertSame(true, periodIsLate(new DateTime('2016-07-13'), new DateTime('2016-08-16'), 28));
    }
    
    public function testBasic()
    {
        $this->assertSame(false, periodIsLate(new DateTime('2016-07-13'), new DateTime('2016-08-16'), 35));
        $this->assertSame(true, periodIsLate(new DateTime('2016-07-13'), new DateTime('2016-08-16'), 28));
        $this->assertSame(false, periodIsLate(new DateTime('2016-07-13'), new DateTime('2016-08-16'), 35));
        $this->assertSame(false, periodIsLate(new DateTime('2016-07-13'), new DateTime('2016-07-29'), 28));
        $this->assertSame(false, periodIsLate(new DateTime('2016-07-12'), new DateTime('2016-07-09'), 28));
        $this->assertSame(true, periodIsLate(new DateTime('2016-07-12'), new DateTime('2016-08-10'), 28));
        $this->assertSame(true, periodIsLate(new DateTime('2016-07-01'), new DateTime('2016-08-01'), 30));
        $this->assertSame(false, periodIsLate(new DateTime('2016-07-01'), new DateTime('2016-07-30'), 30));
        $this->assertSame(false, periodIsLate(new DateTime('2016-01-01'), new DateTime('2016-01-31'), 30));
        $this->assertSame(true, periodIsLate(new DateTime('2016-01-01'), new DateTime('2016-02-01'), 30));
    }
    
    /**
     * @dataProvider randomProvider
     */
    public function testRandom($last, $today, $cycleLength, $expected)
    {
        $this->assertSame($expected, periodIsLate($last, $today, $cycleLength));
    }
    
    public function randomProvider()
    {
        $data = [];
        for ($i = 0; $i < 20; $i++) {
            $cycleLength = rand(10, 40);
            $pass = rand(5, 50);
            $dateString = '2016-0' . rand(1, 9) . '-' . rand(10, 28);
            $last = new DateTime($dateString);
            $today = (new DateTime($dateString))->add(new DateInterval("P{$pass}D"));
            $expected = $pass > $cycleLength;
            $data[] = [$last, $today, $cycleLength, $expected];
        }
        return $data;
    }
}