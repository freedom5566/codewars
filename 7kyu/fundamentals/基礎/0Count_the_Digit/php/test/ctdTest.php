<?php

use PHPUnit\Framework\TestCase;
require "./best.php";
class CountDigitTestCases extends TestCase
{
    private function revTest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }
    public function testBasics() {        
        $this->revTest(nbDig(5750, 0), 4700);
        $this->revTest(nbDig(11011, 2), 9481);
        $this->revTest(nbDig(12224, 8), 7733);
        $this->revTest(nbDig(11549, 1), 11905);
        $this->revTest(nbDig(14550, 7), 8014);
        $this->revTest(nbDig(8304, 7), 3927);
        $this->revTest(nbDig(10576, 9), 7860);
        $this->revTest(nbDig(12526, 1), 13558);
        $this->revTest(nbDig(7856, 4), 7132);
        $this->revTest(nbDig(14956, 1), 17267);
    }
    function _nbDigCC($n, $d) {
        $k = 0; $cnt = 0; $d = strval($d);
        while ($k <= $n) {
            $a = 0; $s = strval($k * $k);
            for ($i = 0; $i < strlen($s);$i++) {
                if ($s[$i] == $d) {
                    $a++;
                }
            }
            if ($a > 0) $cnt += $a;
            $k++;
        }
        return $cnt;
    }
    public function testRandom() {
        for($i = 0; $i < 200; $i++) {
            $n = rand(2000, 15000);
            $d = rand(0, 9);
            $sol = $this->_nbDigCC($n, $d);
            $ans = nbDig($n, $d);
            //echo $ans."\n";
            $this->revTest($ans, $sol);
        }
    }
}