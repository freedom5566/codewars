<?php

use PHPUnit\Framework\TestCase;
require "./a.php";
class OperTestCases extends TestCase {
    private function revTest($actual, $expected) {
        $this->assertEquals($expected, $actual);
    }
    public function testOperVerticalBasics() {        
        $this->revTest(oper("vertMirror", "hSgdHQ\nHnDMao\nClNNxX\niRvxxH\nbqTVvA\nwvSyRu"), "QHdgSh\noaMDnH\nXxNNlC\nHxxvRi\nAvVTqb\nuRySvw");
        $this->revTest(oper("vertMirror", "IzOTWE\nkkbeCM\nWuzZxM\nvDddJw\njiJyHF\nPVHfSx"), "EWTOzI\nMCebkk\nMxZzuW\nwJddDv\nFHyJij\nxSfHVP");
        $this->revTest(oper("vertMirror", "cuQW\nxOuD\nfZwp\neqFx"), "WQuc\nDuOx\npwZf\nxFqe");
        $this->revTest(oper("vertMirror", "CDGIdolo\nUstXfrIg\ntMqjvxWL\nBEyuCnAm\nxsxaEERa\nxZsvOiZS\nLutlBRXE\ntxshhbqE"), 
            "olodIGDC\ngIrfXtsU\nLWxvjqMt\nmAnCuyEB\naREEaxsx\nSZiOvsZx\nEXRBltuL\nEqbhhsxt");
    }
    public function testOperHorizontalBasics() {        
        $this->revTest(oper("horMirror", "lVHt\nJVhv\nCSbg\nyeCt"), "yeCt\nCSbg\nJVhv\nlVHt");
        $this->revTest(oper("horMirror", "njMK\ndbrZ\nLPKo\ncEYz"), "cEYz\nLPKo\ndbrZ\nnjMK");
        $this->revTest(oper("horMirror", "QMxo\ntmFe\nWLUG\nowoq"), "owoq\nWLUG\ntmFe\nQMxo");
        $this->revTest(oper("horMirror", "FYvi\ndZQn\nuGef\nQoSy"), "QoSy\nuGef\ndZQn\nFYvi");
    }
    private function doEx($k) {
        if ($k % 2 === 1) {
            $k += 1;
        }
        $j = 0; $res = array();
        while ($j < $k) {
            $s = "";
            $i = 0;
            while ($i < $k) {
                if (rand(0, 100) % 2 === 0)
                    $s .= chr(rand(97, 122));
                else 
                    $s .= chr(rand(65, 90));
                $i++;
            }
            array_push($res, $s);
            $j++;
        }
        return implode("\n", $res);
    }
    private function vertMirrorK($s) {
        $a = explode("\n", $s);
        $b = array_map(function($row) { return strrev($row); }, $a);
        return implode("\n", $b);
    }
    private function horMirrorK($s) {
        return implode("\n", array_reverse(explode("\n", $s)));
    }
    function oper3212($fct, $s) {
        return $fct($s);
    }
    public function testVerticalRandom() {
        for($i = 0; $i < 100; $i++) {
            $s = $this->doEx(rand(8,20)); 
            $sol = $this->oper3212([$this, "vertMirrorK"], $s);
            $ans = oper("vertMirror", $s);
            //echo $sol."\n";
            $this->revTest($ans, $sol);
        }
    }
    public function testHorizontalRandom() {
        for($i = 0; $i < 100; $i++) {
            $s = $this->doEx(rand(8,20)); 
            $sol = $this->oper3212([$this, "horMirrorK"], $s);
            $ans = oper("horMirror", $s);
            //echo $sol."\n";
            $this->revTest($ans, $sol);
        }
    }
}