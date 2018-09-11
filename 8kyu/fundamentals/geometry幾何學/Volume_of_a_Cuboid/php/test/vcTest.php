<?php

use PHPUnit\Framework\TestCase;
require "./a.php";
class VolumeOfACuboidTest extends TestCase {
  protected $backupGlobalsBlacklist = ['kata'];
  public function testExamples() {
    global $kata;
    $this->assertEquals(4, $kata->get_volume_of_cuboid(1, 2, 2));
    $this->assertEquals(63, $kata->get_volume_of_cuboid(6.3, 2, 5));
  }
  public function testFixed() {
    global $kata;
    $this->assertEquals(1, $kata->get_volume_of_cuboid(1, 1, 1));
    $this->assertEquals(1, $kata->get_volume_of_cuboid(0.5, 0.5, 4));
    $this->assertEquals(13, $kata->get_volume_of_cuboid(1, 4, 3.25));
    $this->assertEquals(13, $kata->get_volume_of_cuboid(2.6, 1, 5));
    $this->assertEquals(100, $kata->get_volume_of_cuboid(20, 2, 2.5));
    $this->assertEquals(100, $kata->get_volume_of_cuboid(25, 2, 2));
    $this->assertEquals(1000, $kata->get_volume_of_cuboid(10, 10, 10));
  }
  protected function solution($l, $w, $h) {
    return $l * $w * $h;
  }
  public function testRandom() {
    global $kata;
    for ($i = 0; $i < 1e3; $i++) $this->assertEquals($this->solution($l = rand(0, 100), $w = rand(0, 100), $h = rand(0, 100)), $kata->get_volume_of_cuboid($l, $w, $h));
  }
}