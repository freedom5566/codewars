<?php

use PHPUnit\Framework\TestCase;
require "./a.php";

class StringReverseTest extends TestCase {
  public function testExamples() {
    $this->assertEquals("World Hello", reverse("Hello World"));
    $this->assertEquals("There. Hi", reverse("Hi There."));
    $this->assertEquals("World  Hello", reverse("Hello  World"));
  }
  public function testFixed() {
    $this->assertEquals("this at expert an am I", reverse("I am an expert at this"));
    $this->assertEquals("easy so is This", reverse("This is so easy"));
    $this->assertEquals("cares one no", reverse("no one cares"));
    $this->assertEquals("manipulation! string love I", reverse("I love string manipulation!"));
    $this->assertEquals("drawbacks. its of some despite PHP in programming love still I but frustrating, be sometimes can PHP in programs Writing", reverse("Writing programs in PHP can sometimes be frustrating, but I still love programming in PHP despite some of its drawbacks."));
    $this->assertEquals('', reverse(''));
    $this->assertEquals("Codewars", reverse("Codewars"));
    $this->assertEquals("CodeWars", reverse("CodeWars"));
    $this->assertEquals("CODEWARS", reverse("CODEWARS"));
  }
  protected function randomSentence() {
    return implode(" ", array_map(function () {return ["I", "am", "an", "expert", "at", "this", "This", "is", "so", "easy", "no", "one", "cares", "Codewars", "CodeWars", "codewars", "CODEWARS", "I", "love", "PHP!", "Codewars", "is", "the", "best", "site", "I've", "ever", "used.", "In", "my", "life.", "Seriously."][rand(0, 31)];}, range(0, rand(0, 100))));
  }
  protected function solution($s) {
    return implode(" ", array_reverse(explode(" ", $s)));
  }
  public function testRandom() {
    for ($i = 0; $i < 100; $i++) $this->assertEquals($this->solution($s = $this->randomSentence()), reverse($s));
  }
}