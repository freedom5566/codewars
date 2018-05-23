<?php

use PHPUnit\Framework\TestCase;
require "./a.php";
class MyTestCases extends TestCase
{
    public function testExample()
    {
        $this->assertSame("Friday May 2", shortenToDate("Friday May 2, 9am"));
        $this->assertSame("Tuesday January 29", shortenToDate("Tuesday January 29, 10pm"));
        $this->assertSame("Monday December 25", shortenToDate("Monday December 25, 10pm"));
    }
    
    /**
     * @dataProvider randomProvider
     */
    public function testRandom($longDate, $expected)
    {
        $this->assertSame($expected, shortenToDate($longDate));
    }
    
    public function randomProvider()
    {
        $data = [];
        $daysOfWeek = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
        $months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        $times = ["1am","2pm","3pm","10am","11pm","12am"];

        for ($i = 0; $i < 31; $i++) {
            $short = $daysOfWeek[rand(0,6)] . ' ' . $months[rand(0,11)] . ' ' . rand(1,28);
            $long = $short . ', ' . $times[rand(0,5)];
            $data[] = [$long, $short];
        }

        return $data;
    }
}