<?php

use PHPUnit\Framework\TestCase;
require "./a.php";
class DeodorantTestCases extends TestCase {
    private function revTest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }
    public function testBasics() {        
        $this->revTest(evaporator(10,10,10),22);
        $this->revTest(evaporator(10,10,5),29);
        $this->revTest(evaporator(100,5,5),59);
        $this->revTest(evaporator(50,12,1),37);
        $this->revTest(evaporator(47.5,8,8),31);
        $this->revTest(evaporator(100,1,1),459);
        $this->revTest(evaporator(10,1,1),459);
        $this->revTest(evaporator(100,1,5),299);
    }
    function _evaporatorGKU($content, $evap_per_day, $threshold) {
        $current = 100; $day = 0;
        while ($current >= $threshold) {
            $current -= $current * $evap_per_day / 100;
            $day++;
        }
        return $day;
    }
    public function testRandom() {
        for($i = 0; $i < 200; $i++) {
            $perday = rand(1, 10);
            $t = rand(1, 50) / 100;
            $threshold = $t + rand(1, 30);
            $c = 100;
            $sol = evaporator($c, $perday, $threshold);
            $ans = $this->_evaporatorGKU($c, $perday, $threshold);
            $this->revTest($ans, $sol);
        }
    }
}