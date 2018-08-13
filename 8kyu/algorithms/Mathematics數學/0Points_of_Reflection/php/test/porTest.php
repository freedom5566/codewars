<?php

use PHPUnit\Framework\TestCase;
require "./a.php";

class PointsOfReflectionTest extends TestCase {
  public function testExamples() {
    $this->assertEquals([2, 2], symmetric_point([0, 0], [1, 1]));
    $this->assertEquals([-6, -18], symmetric_point([2, 6], [-2, -6]));
  }
  public function testFixed() {
    $this->assertEquals([-30, 30], symmetric_point([10, -10], [-10, 10]));
    $this->assertEquals([-25, 37], symmetric_point([1, -35], [-12, 1]));
    $this->assertEquals([-1014, -443], symmetric_point([1000, 15], [-7, -214]));
    $this->assertEquals([0, 0], symmetric_point([0, 0], [0, 0]));
  }
  protected function solution($p, $q) {
    echo "\$p = (" . implode(", ", $p) . ")\n";
    echo "\$q = (" . implode(", ", $q) . ")\n";
    $result = [2 * $q[0] - $p[0], 2 * $q[1] - $p[1]];
    echo "Expected result to be: (" . implode(", ", $result) . ")\n";
    return $result;
  }
  protected function randCoords() {
    return [rand(-1000, 1000), rand(-1000, 1000)];
  }
  public function testRandom() {
    for ($i = 0; $i < 1000; $i++) $this->assertEquals($this->solution($p = $this->randCoords(), $q = $this->randCoords()), symmetric_point($p, $q));
  }
}