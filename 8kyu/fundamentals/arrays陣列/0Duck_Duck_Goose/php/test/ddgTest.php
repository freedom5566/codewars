<?php

use PHPUnit\Framework\TestCase;
require "./a.php";
class DuckDuckGooseTest extends TestCase {
  public function testDescriptionExamples() {
    $this->assertEquals("Andre", duck_duck_goose([["name" => "Andre"], ["name" => "Beatrice"], ["name" => "Christina"], ["name" => "Daniel"]], 1));
    $this->assertEquals("Andre", duck_duck_goose([["name" => "Andre"], ["name" => "Beatrice"], ["name" => "Christina"], ["name" => "Daniel"]], 5));
    $this->assertEquals("Daniel", duck_duck_goose([["name" => "Andre"], ["name" => "Beatrice"], ["name" => "Christina"], ["name" => "Daniel"]], 4));
  }
  public function testFixed() {
    $players = [["name" => "a"], ["name" => "b"], ["name" => "c"], ["name" => "d"], ["name" => "c"], ["name" => "e"], ["name" => "f"], ["name" => "g"], ["name" => "h"], ["name" => "z"]];
    $this->assertEquals("a", duck_duck_goose($players, 1));
    $this->assertEquals("c", duck_duck_goose($players, 3));
    $this->assertEquals("z", duck_duck_goose($players, 10));
    $this->assertEquals("z", duck_duck_goose($players, 20));
    $this->assertEquals("z", duck_duck_goose($players, 30));
    $this->assertEquals("g", duck_duck_goose($players, 18));
    $this->assertEquals("g", duck_duck_goose($players, 28));
    $this->assertEquals("b", duck_duck_goose($players, 12));
    $this->assertEquals("b", duck_duck_goose($players, 2));
    $this->assertEquals("f", duck_duck_goose($players, 7));
  }
  protected function solution($p, $g) {
    return $p[($g % count($p)) - 1 < 0 ? (($g % count($p)) - 1 + count($p)) : ($g % count($p)) - 1]["name"];
  }
  protected function randomArray(): array {
    return array_map(function () {return ["name" => ucfirst(implode(array_map(function () {return range("a", "z")[rand(0, 25)];}, range(1, rand(3, 16)))))];}, range(1, rand(2, 100)));
  }
  public function testRandom() {
    for ($i = 0; $i < 1e3; $i++) $this->assertEquals($this->solution($p = $this->randomArray(), $g = rand(1, 1e3)), duck_duck_goose($p, $g));
  }
}