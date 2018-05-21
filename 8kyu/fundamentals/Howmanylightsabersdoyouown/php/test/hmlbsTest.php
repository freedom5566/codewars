<?php

use PHPUnit\Framework\TestCase;
require "./a.php";
class MyTestCases extends TestCase
{
    public function testLightsabers() {
        $this->assertSame(18, howManyLightsabersDoYouOwn('Zach'));
        $this->assertSame(0, howManyLightsabersDoYouOwn('Adam'));
        $this->assertSame(0, howManyLightsabersDoYouOwn(100));
        $this->assertSame(0, howManyLightsabersDoYouOwn());
    }
}