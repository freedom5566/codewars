<?php

use PHPUnit\Framework\TestCase;
require "./a.php";
class MumblingTestCases extends TestCase
{
    private function revTest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }
    public function testBasics() {        
        $this->revTest(accum("ZpglnRxqenU"), "Z-Pp-Ggg-Llll-Nnnnn-Rrrrrr-Xxxxxxx-Qqqqqqqq-Eeeeeeeee-Nnnnnnnnnn-Uuuuuuuuuuu");
        $this->revTest(accum("NyffsGeyylB"), "N-Yy-Fff-Ffff-Sssss-Gggggg-Eeeeeee-Yyyyyyyy-Yyyyyyyyy-Llllllllll-Bbbbbbbbbbb");
        $this->revTest(accum("MjtkuBovqrU"), "M-Jj-Ttt-Kkkk-Uuuuu-Bbbbbb-Ooooooo-Vvvvvvvv-Qqqqqqqqq-Rrrrrrrrrr-Uuuuuuuuuuu");
        $this->revTest(accum("EvidjUnokmM"), "E-Vv-Iii-Dddd-Jjjjj-Uuuuuu-Nnnnnnn-Oooooooo-Kkkkkkkkk-Mmmmmmmmmm-Mmmmmmmmmmm");
        $this->revTest(accum("HbideVbxncC"), "H-Bb-Iii-Dddd-Eeeee-Vvvvvv-Bbbbbbb-Xxxxxxxx-Nnnnnnnnn-Cccccccccc-Ccccccccccc");
        $this->revTest(accum("VwhvtHtrxfE"), "V-Ww-Hhh-Vvvv-Ttttt-Hhhhhh-Ttttttt-Rrrrrrrr-Xxxxxxxxx-Ffffffffff-Eeeeeeeeeee");
        $this->revTest(accum("KurgiKmkphY"), "K-Uu-Rrr-Gggg-Iiiii-Kkkkkk-Mmmmmmm-Kkkkkkkk-Ppppppppp-Hhhhhhhhhh-Yyyyyyyyyyy");
        $this->revTest(accum("NctlfBlnmfH"), "N-Cc-Ttt-Llll-Fffff-Bbbbbb-Lllllll-Nnnnnnnn-Mmmmmmmmm-Ffffffffff-Hhhhhhhhhhh");
    }
    private function capitalizeUPSA($s) {
        return preg_replace_callback('/\b./', function ($a) {return strtoupper($a[0]);}, strtolower($s));
    }
    private function _accumUPSA($s) {
        $res = "";
        for ($i = 0; $i < strlen($s); $i++) {
            for ($j = 0; $j < $i + 1; $j++)
                $res .= $s[$i];
            $res .= "-";
        }
        return $this->capitalizeUPSA(substr($res, 0, strlen($res) - 1));
    }
    private function doStr($k) {
        $s = ""; $j = 0;
        while ($j < $k) {
            if (rand(0, 11) % 5 == 0)
                $s .= chr(rand(97, 122));
            else $s .= chr(rand(65, 90));
            $j++;
        }
        return $s;
    }
    public function testRandom() {
        for($i = 0; $i < 200; $i++) {
            $s = $this->doStr(rand(30, 80));
            $sol = $this->_accumUPSA($s);
            $ans = accum($s);
            //echo $ans."\n";
            $this->revTest($ans, $sol);
        }
    }
}