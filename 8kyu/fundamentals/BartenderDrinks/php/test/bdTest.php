<?php

use PHPUnit\Framework\TestCase;
require "./best.php";

class GetDrinkByProfessionTest extends TestCase {
  public function testFixed() {
    $this->assertEquals("Patron Tequila", get_drink_by_profession("jabrOni"), "'Jabroni' should map to 'Patron Tequila'");
    $this->assertEquals("Anything with Alcohol", get_drink_by_profession("scHOOl counselor"), "'School Counselor' should map to 'Anything with alcohol'");
    $this->assertEquals("Hipster Craft Beer", get_drink_by_profession("prOgramMer"), "'Programmer' should map to 'Hipster Craft Beer'");
    $this->assertEquals("Moonshine", get_drink_by_profession("bike ganG member"), "'Bike Gang Member' should map to 'Moonshine'");
    $this->assertEquals("Your tax dollars", get_drink_by_profession("poLiTiCian"), "'Politician' should map to 'Your tax dollars'");
    $this->assertEquals("Cristal", get_drink_by_profession("rapper"), "'Rapper' should map to 'Cristal'");
    $this->assertEquals("Beer", get_drink_by_profession("pundit"), "'Pundit' should map to 'Beer'");
    $this->assertEquals("Beer", get_drink_by_profession("Pug"), "'Pug' should map to 'Beer'");
  }
  protected function solution(string $s): string {
    return isset(($a = [
      'jabroni' => 'Patron Tequila',
      'school counselor' => 'Anything with Alcohol',
      'programmer' => 'Hipster Craft Beer',
      'bike gang member' => 'Moonshine',
      'politician' => 'Your tax dollars',
      'rapper' => 'Cristal'
    ])[$r = strtolower($s)]) ? $a[$r] : 'Beer';
  }
  protected function randomString(): string {
    return lcg_value() < 0.125 ? implode(array_map(function () {return 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'[rand(0, 51)];}, range(1, rand(5, 20)))) : implode(array_map(function ($s) {return lcg_value() < 0.5 ? strtolower($s) : strtoupper($s);}, str_split(($a = ['jabroni', 'school counselor', 'programmer', 'bike gang member', 'politician', 'rapper'])[array_rand($a)])));
  }
  public function testRandom() {
    foreach (range(1, 1e3) as $_) $this->assertEquals($this->solution($s = $this->randomString()), get_drink_by_profession($s));
  }
}