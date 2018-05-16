<?php

use PHPUnit\Framework\TestCase;
require "./best.php";
class PeopleWithAgeDrinkTest extends TestCase {
  public function testDescriptionExamples() {
    $this->assertEquals('drink toddy', people_with_age_drink(13));
    $this->assertEquals('drink coke', people_with_age_drink(17));
    $this->assertEquals('drink beer', people_with_age_drink(18));
    $this->assertEquals('drink beer', people_with_age_drink(20));
    $this->assertEquals('drink whisky', people_with_age_drink(21));
  }
  public function testFixed() {
    $this->assertEquals('drink toddy', people_with_age_drink(0));
    $this->assertEquals('drink toddy', people_with_age_drink(1));
    $this->assertEquals('drink toddy', people_with_age_drink(2));
    $this->assertEquals('drink toddy', people_with_age_drink(3));
    $this->assertEquals('drink toddy', people_with_age_drink(4));
    $this->assertEquals('drink toddy', people_with_age_drink(5));
    $this->assertEquals('drink toddy', people_with_age_drink(6));
    $this->assertEquals('drink toddy', people_with_age_drink(7));
    $this->assertEquals('drink toddy', people_with_age_drink(8));
    $this->assertEquals('drink toddy', people_with_age_drink(9));
    $this->assertEquals('drink toddy', people_with_age_drink(10));
    $this->assertEquals('drink toddy', people_with_age_drink(11));
    $this->assertEquals('drink toddy', people_with_age_drink(12));
    $this->assertEquals('drink coke', people_with_age_drink(14));
    $this->assertEquals('drink coke', people_with_age_drink(15));
    $this->assertEquals('drink coke', people_with_age_drink(16));
    $this->assertEquals('drink beer', people_with_age_drink(19));
    $this->assertEquals('drink whisky', people_with_age_drink(22));
  }
  protected function solution(int $n): string {
    return 'drink ' . ($n < 21 ? $n < 18 ? $n < 14 ? 'toddy' : 'coke' : 'beer' : 'whisky');
  }
  public function testRandom() {
    foreach (range(1, 1e3) as $_) $this->assertEquals($this->solution($n = random_int(0, 100)), people_with_age_drink($n));
  }
}