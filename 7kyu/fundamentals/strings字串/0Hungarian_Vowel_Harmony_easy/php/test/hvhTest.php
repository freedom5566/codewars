<?php

use PHPUnit\Framework\TestCase;
require "./best.php";

class DativeTest extends TestCase {
  public function testDescriptionExamples() {
    $this->assertEquals("ablaknak", dative("ablak"));
    $this->assertEquals("széknek", dative("szék"));
    $this->assertEquals("otthonnak", dative("otthon"));
  }
  public function testFixed() {
    $this->assertEquals("tükörnek", dative("tükör"));
    $this->assertEquals("keretnek", dative("keret"));
    $this->assertEquals("virágnak", dative("virág"));
    $this->assertEquals("tettnek", dative("tett"));
    $this->assertEquals("rokkantnak", dative("rokkant"));
    $this->assertEquals("rossznak", dative("rossz"));
    $this->assertEquals("gonosznak", dative("gonosz"));
  }
  protected function solution(string $w): string {
    $vowels = [];
    preg_match_all('/[eéiíöőüűaáoóuú]/', $w, $vowels);
    $last_vowel = $vowels[0][count($vowels[0]) - 1];
    $w = $w . "n" . (preg_match('/[eéiíöőüű]/', $last_vowel) ? "e" : "a") . "k";
    echo "Expected output to be: \"$w\"\n";
    return $w;
  }
  protected function shuffle(array $a): array {
    for ($i = 0; $i < 2 * count($a); $i++) {
      $j = rand(0, count($a) - 1);
      $k = rand(0, count($a) - 1);
      list($a[$j], $a[$k]) = [$a[$k], $a[$j]];
    }
    return $a;
  }
  public function testRandom() {
    $random_words = "kalap,ház,tűz,víz,méz,kéz,ember,rák,máz,üveg,pohár,húr,gödör,csűr,lakás,rokon";
    $front = "terv,kérvény,vény,kép,hit,tök,őr,füst,űr";
    $back = "rag,tár,kár,zár,gondnok,mór,mókus,úr";
    $words = explode(",", "$random_words,$front,$back");
    $words = $this->shuffle($words);
    for ($i = 0; $i < count($words); $i++) {
      $input = $words[$i];
      $this->assertEquals($this->solution($input), dative($input));
    }
  }
}