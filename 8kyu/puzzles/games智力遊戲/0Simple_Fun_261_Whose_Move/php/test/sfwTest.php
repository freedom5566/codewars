<?php
use PHPUnit\Framework\TestCase;
require "./clever.php";
class WhoseMoveTest extends TestCase {
  public function testExamples() {
    $this->assertEquals("white", whose_move("black", false));
    $this->assertEquals("white", whose_move("white", true));
    $this->assertEquals("black", whose_move("white", false));
    // $this->assertEquals("black", whose_move("black",true));
    // $this->assertEquals("black", whose_move("black",true));
    
  }
}