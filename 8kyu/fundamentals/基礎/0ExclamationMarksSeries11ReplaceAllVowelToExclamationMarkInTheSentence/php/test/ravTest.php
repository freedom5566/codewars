<?php
use PHPUnit\Framework\TestCase;
require "./perg.php";
class ReplaceTest extends TestCase {
  public function testExamples() {
    $this->assertEquals("H!!", replace("Hi!"));
    $this->assertEquals("!H!! H!!", replace("!Hi! Hi!"));
    $this->assertEquals("!!!!!", replace("aeiou"));
    $this->assertEquals("!BCD!", replace("ABCDE"));
  }
  public function testFixed() {
    $this->assertEquals("! h!v! ! p!n ... ! h!v! !n !ppl! ... !gh!  !ppl! P!n!", replace("I have a pen ... I have an apple ... Ugh!  Apple Pen!"));
    $this->assertEquals("Th! !nds j!st!fy th! m!!ns", replace("The ends justify the means"));
    $this->assertEquals("Th! !nds j!st!fy th! m!m!s", replace("The ends justify the memes"));
    $this->assertEquals("myj!nx!n2015 !s th! !!th!r !f th!s !w!s!m! K!t!.", replace("myjinxin2015 is the author of this awesome Kata."));
    $this->assertEquals("d!n!lds!bl!!ng !s th! !!th!r !f th! PHP tr!nsl!t!!n t! th!s K!t!.", replace("donaldsebleung is the author of the PHP translation to this Kata."));
  }
  protected function solution(string $s): string {
    return preg_replace('/[aeiou]/i', "!", $s);
  }
  protected function randomString(): string {
    return implode(array_map(function (): string {return "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789          .,?!"[rand(0, 75)];}, range(1, rand(1, 1000))));
  }
  public function testRandom() {
    for ($i = 0; $i < 1e3; $i++) $this->assertEquals($this->solution($s = $this->randomString()), replace($s));
  }
}