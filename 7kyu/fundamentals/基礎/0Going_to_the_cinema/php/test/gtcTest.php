<?php

use PHPUnit\Framework\TestCase;
require "./oo.php";
class GoingToCinemaCases extends TestCase
{
    public function testBasics() {
        $this->assertEquals(43, movie(500, 15, 0.9));
        $this->assertEquals(24, movie(100, 10, 0.95));
        $this->assertEquals(2, movie(0, 10, 0.95));
        $this->assertEquals(21, movie(250, 20, 0.9));
        $this->assertEquals(34, movie(500, 20, 0.9));
        $this->assertEquals(135, movie(2500, 20, 0.9));
    }
    
    private function _movieAB($card, $ticket, $perc) {
        $i = 0; $sb = $card; $sa = 0; $prev = $ticket;
        while (true) {
            $i++;
            $nou = $prev * $perc;
            $sb += $nou;
            $prev = $nou;
            $sa += $ticket;
            if (ceil($sb) < $sa)
                return $i;
        }
    }

    public function testRandom() {
        for($i = 0; $i < 100; $i++) {
            $card = rand(1000, 1000000);
            $tck = rand(2, 50);
            $perc = rand(2, 50) / 100;
            $this->assertEquals($this->_movieAB($card, $tck, $perc), movie($card, $tck, $perc));
        }
    }
}