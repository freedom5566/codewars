<?php

use PHPUnit\Framework\TestCase;
require "./best.php";
class ComplementaryDNATest extends TestCase {
  public function testExamples() {
    $this->assertEquals("TTTT", DNA_strand("AAAA"));
    $this->assertEquals("AAAA", DNA_strand("TTTT"));
    $this->assertEquals("TAACG", DNA_strand("ATTGC"));
    $this->assertEquals("ATTGC", DNA_strand("TAACG"));
    $this->assertEquals("CATA", DNA_strand("GTAT"));
    $this->assertEquals("GTAT", DNA_strand("CATA"));
  }
  public function testFixed() {
    $this->assertEquals("TTCC", DNA_strand("AAGG"));
    $this->assertEquals("AAGG", DNA_strand("TTCC"));
    $this->assertEquals("GCGC", DNA_strand("CGCG"));
    $this->assertEquals("CGCG", DNA_strand("GCGC"));
    $this->assertEquals("ATAT", DNA_strand("TATA"));
    $this->assertEquals("TATA", DNA_strand("ATAT"));
    $this->assertEquals("CAT", DNA_strand("GTA"));
    $this->assertEquals("GTA", DNA_strand("CAT"));
    $this->assertEquals("TAACG", DNA_strand("ATTGC"));
    $this->assertEquals("ATTGC", DNA_strand("TAACG"));
  }
  public function testAdvanced() {
    $this->assertEquals("CATAGCTAGCTAGCTAGCTAATATAAAAGCTGCTCTAAATTTATATATATATATGCTCTCTTATGTCTATCTGTCTAAT", DNA_strand("GTATCGATCGATCGATCGATTATATTTTCGACGAGATTTAAATATATATATATACGAGAGAATACAGATAGACAGATTA"));
    $this->assertEquals("GTATCGATCGATCGATCGATTATATTTTCGACGAGATTTAAATATATATATATACGAGAGAATACAGATAGACAGATTA", DNA_strand("CATAGCTAGCTAGCTAGCTAATATAAAAGCTGCTCTAAATTTATATATATATATGCTCTCTTATGTCTATCTGTCTAAT"));
  }
  protected function randomDNA() {
    return implode(array_map(function () {return ["G", "C", "A", "T"][rand(0, 3)];}, range(0, rand(0, 100))));
  }
  protected function solution($s) {
    return implode(array_map(function ($c) {return $c === "A" ? "T" : ($c === "T" ? "A" : ($c === "G" ? "C" : "G"));}, str_split($s)));
  }
  public function testRandom() {
    for ($i = 0; $i < 10000; $i++) $this->assertEquals($this->solution($s = $this->randomDNA()), DNA_strand($s));
  }
}