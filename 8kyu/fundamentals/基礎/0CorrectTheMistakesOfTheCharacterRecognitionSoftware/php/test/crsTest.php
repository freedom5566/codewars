<?php
use PHPUnit\Framework\TestCase;
require "./preg.php";

class MyTestCases extends TestCase
{
    public function testMoreTestCases() {
      $this->assertEquals("IF-RUDYARD KIPLING",correct("1F-RUDYARD K1PL1NG"));
      $this->assertEquals("ROBERT MERLE - THE DAY OF THE DOLPHIN",correct("R0BERT MERLE - THE DAY 0F THE D0LPH1N"));
      $this->assertEquals("RICHARD P. FEYNMAN - THE FEYNMAN LECTURES ON PHYSICS",correct("R1CHARD P. FEYNMAN - THE FEYNMAN LECTURE5 0N PHY51C5"));
      $this->assertEquals("RICHARD P. FEYNMAN - STATISTICAL MECHANICS",correct("R1CHARD P. FEYNMAN - 5TAT15T1CAL MECHAN1C5"));
      $this->assertEquals("STEPHEN HAWKING - A BRIEF HISTORY OF TIME",correct("5TEPHEN HAWK1NG - A BR1EF H15T0RY 0F T1ME"));
      $this->assertEquals("STEPHEN HAWKING - THE UNIVERSE IN A NUTSHELL",correct("5TEPHEN HAWK1NG - THE UN1VER5E 1N A NUT5HELL"));
      $this->assertEquals("ERNEST HEMINGWAY - A FARWELL TO ARMS",correct("ERNE5T HEM1NGWAY - A FARWELL T0 ARM5"));
      $this->assertEquals("ERNEST HEMINGWAY - FOR WHOM THE BELL TOLLS",correct("ERNE5T HEM1NGWAY - F0R WH0M THE BELL T0LL5"));
      $this->assertEquals("ERNEST HEMINGWAY - THE OLD MAN AND THE SEA",correct("ERNE5T HEM1NGWAY - THE 0LD MAN AND THE 5EA"));
      $this->assertEquals("J. R. R. TOLKIEN - THE LORD OF THE RINGS",correct("J. R. R. T0LK1EN - THE L0RD 0F THE R1NG5"));
      $this->assertEquals("J. D. SALINGER - THE CATCHER IN THE RYE",correct("J. D. 5AL1NGER - THE CATCHER 1N THE RYE"));
      $this->assertEquals("J. K. ROWLING - HARRY POTTER AND THE PHILOSOPHER'S STONE",correct("J. K. R0WL1NG - HARRY P0TTER AND THE PH1L050PHER'5 5T0NE"));
      $this->assertEquals("J. K. ROWLING - HARRY POTTER AND THE CHAMBER OF SECRETS",correct("J. K. R0WL1NG - HARRY P0TTER AND THE CHAMBER 0F 5ECRET5"));
      $this->assertEquals("J. K. ROWLING - HARRY POTTER AND THE PRISONER OF Azkaban",correct("J. K. R0WL1NG - HARRY P0TTER AND THE PR150NER 0F Azkaban"));
      $this->assertEquals("J. K. ROWLING - HARRY POTTER AND THE GOBLET OF FIRE",correct("J. K. R0WL1NG - HARRY P0TTER AND THE G0BLET 0F F1RE"));
      $this->assertEquals("J. K. ROWLING - HARRY POTTER AND THE ORDER OF PHOENIX",correct("J. K. R0WL1NG - HARRY P0TTER AND THE 0RDER 0F PH0EN1X"));
      $this->assertEquals("J. K. ROWLING - HARRY POTTER AND THE HALF-BLOOD PRINCE",correct("J. K. R0WL1NG - HARRY P0TTER AND THE HALF-BL00D PR1NCE"));
      $this->assertEquals("J. K. ROWLING - HARRY POTTER AND THE DEATHLY HALLOWS",correct("J. K. R0WL1NG - HARRY P0TTER AND THE DEATHLY HALL0W5"));
      $this->assertEquals("URSULA K. LE GUIN - A WIZARD OF EARTHSEA",correct("UR5ULA K. LE GU1N - A W1ZARD 0F EARTH5EA"));
      $this->assertEquals("URSULA K. LE GUIN - THE TOMBS OF ATUAN",correct("UR5ULA K. LE GU1N - THE T0MB5 0F ATUAN"));
      $this->assertEquals("URSULA K. LE GUIN - THE FARTHEST SHORE",correct("UR5ULA K. LE GU1N - THE FARTHE5T 5H0RE"));
      $this->assertEquals("URSULA K. LE GUIN - TALES FROM EARTHSEA",correct("UR5ULA K. LE GU1N - TALE5 FR0M EARTH5EA"));
    }
    
    public function testRandomTests() {
      for($i = 0; $i < 20; $i++){
        $test = $this->randomString();
        $this->assertEquals( $this->correctCheck($test), correct($test) );
      }
    }
    
    private function correctCheck($string) {
		  $string = str_replace("5", 'S', $string);
      $string = str_replace("0", 'O', $string);
      $string = str_replace("1", 'I', $string);
      return $string;
    }
    
	  private function randomString() {
      $array = [];
      $possible = "ABCDEFGHJKLMNPQRTUVWXYZ015";
      $length = rand(5, 30);

      for($i=0; $i < $length; $i++) {
        $array []= $possible[rand(0, strlen($possible) - 1)];
      }
      return implode("", $array);
	  }
}