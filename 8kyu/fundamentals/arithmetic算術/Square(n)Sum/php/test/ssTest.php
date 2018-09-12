<?php

use PHPUnit\Framework\TestCase;
require "./a.php";
class SquareSumTestCases extends TestCase {
    public function testBasic() {
      $this->assertEquals(square_sum([1,2]), 5);
      $this->assertEquals(square_sum([0, 3, 4, 5]), 50);
      $this->assertEquals(square_sum([]), 0);
      $this->assertEquals(square_sum([-1,-2]), 5);
      $this->assertEquals(square_sum([-1,0,1]), 2);
    }
    public function testRandom() {
      for($i=1; $i<25; $i++) {
        $rands = [];
        for($j=0; $j<$i; $j++) {
          $rands[] = mt_rand(-10, 50);
        }
        $this->assertEquals(square_sum($rands), $this->mySolution($rands));
      }
    }
    private function mySolution($numbers) {
      return array_sum(array_map(function ($v) { return $v**2; }, $numbers));
    }
}