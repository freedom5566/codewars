<?php

use PHPUnit\Framework\TestCase;
require "./a.php";
function multiply($a, $b) {
  return $a * $b;
}
function add($a = 0, $b = 0) { /* Function Body */ }
function subtract($a, $b, $c = 3, $d = 10): array {}
function divide($a, $b, $c, $d, $e = null): int {}
function greet(string $name = "World"): string {
  return "Hello $name";
}

class GetInfoTest extends TestCase {
  public function testDescriptionExample() {
    $this->assertEquals([2, 2, false, false, false, true], get_info('multiply'));
  }
  
  /**
   * @dataProvider mainProvider
   */
  public function testMain($expected, $fn) {
    $this->assertEquals($expected, get_info($fn));
  }
  
  public function mainProvider() {
    return $this->randomize([
      [
        [2, 0, false, false, false, true],
        'add'
      ],
      [
        [4, 2, true, false, false, true],
        'subtract'
      ],
      [
        [5, 4, true, false, false, true],
        'divide'
      ],
      [
        [1, 0, true, false, false, true],
        'greet'
      ],
      [
        [1, 1, false, false, true, false],
        'function_exists'
      ],
      [
        [3, 2, false, false, true, false],
        'is_a'
      ],
      [
        [3, 1, false, false, true, false],
        'array_filter'
      ],
      [
        [6, 3, false, true, false, true],
        function ($a, $b, $c, $d = "World", $e = M_PI, $f = false) {}
      ],
      [
        [0, 0, true, true, false, true],
        function (): bool {}
      ],
      [
        [9, 9, true, true, false, true],
        function (float $a, float $b, int $c, string $d, bool $e, array $f, object $g, Closure $h, Reflector $i): float {}
      ]
    ]);
  }
  
  protected function randomize($a) {
    for ($i = 0; $i < 2 * count($a); $i++) {
      $j = rand(0, count($a) - 1);
      $k = rand(0, count($a) - 1);
      list($a[$j], $a[$k]) = [$a[$k], $a[$j]];
    }
    return $a;
  }
}