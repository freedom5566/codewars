<?php

class MyTestCases extends TestCase {
    protected function sol($n) {
      return ['Thumb', 'Index finger', 'Middle finger', 'Ring finger', 'Little finger',
              'Ring finger', 'Middle finger', 'Index finger'][($n-1) % 8];
    }
    public function testBasics() {
      $this->assertEquals("Index finger", which_finger(10));
      $this->assertEquals("Ring finger", which_finger(20));
      $this->assertEquals("Ring finger", which_finger(30));
      $this->assertEquals("Index finger", which_finger(50));
      $this->assertEquals("Ring finger", which_finger(100));
      $this->assertEquals("Index finger", which_finger(1000));
      $this->assertEquals("Index finger", which_finger(10000));
    }
    public function testRandom() {
      for($myjinxini = 0; $myjinxini < 1e2; $myjinxini++) {
        $t = rand(1, 1000000);
        echo "<font color='#CD7F32'>Test for: n = " . $t . "</font><br>";
        $this->assertEquals($this->sol($t), which_finger($t));
      }
    }
}