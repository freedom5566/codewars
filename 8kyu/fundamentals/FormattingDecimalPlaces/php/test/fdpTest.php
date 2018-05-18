<?php


use PHPUnit\Framework\TestCase;
require "./a.php";

class TwoDecimalPlacesTestCases extends TestCase
{
    public function testTwoDecimalPlaces() {
      $this->assertSame(4.66, twoDecimalPlaces(4.659725356), "didn't work for 4.659725356");
      $this->assertSame(173735326.38, twoDecimalPlaces(173735326.3783732637948948), "didn't work for 173735326.3783732637948948");
      $this->assertSame(4.65, twoDecimalPlaces(4.653725356), "didn't work for 4.653725356");
    }
}