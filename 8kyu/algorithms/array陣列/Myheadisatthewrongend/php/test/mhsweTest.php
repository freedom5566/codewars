<?php


use PHPUnit\Framework\TestCase;
require "./a.php";
class MyHeadIsAtTheWrongEnd extends TestCase
{
    public function testBasicTests() {
      $this->assertEquals(["head", "body", "tail"],fixTheMeerkat(["tail", "body", "head"]));
      $this->assertEquals(["heads", "body", "tails"], fixTheMeerkat(["tails", "body", "heads"]));
      $this->assertEquals(["top", "middle", "bottom"], fixTheMeerkat(["bottom", "middle", "top"]));
      $this->assertEquals(["upper legs", "torso", "lower legs"], fixTheMeerkat(["lower legs", "torso", "upper legs"]));
      $this->assertEquals(["sky", "rainbow", "ground"], fixTheMeerkat(["ground", "rainbow", "sky"]));
    }

    public function testRandomTests() {
      $base = ["Kenshiro","Raoh","Kaiou","Toki","Hyo","Jagi","Han","Souther","Falco","Rei","Shoki","Juda","Taiga","Shin","Boltz","Shin","Soria"];
      
      for ($i = 0; $i < 40; $i++) {
        shuffle($base);
        $arr = array_slice($base, 0, 3);
        $this->assertEquals(array_reverse($arr), fixTheMeerkat($arr), "It should work for random inputs too");
      }
    }
}