<?php
class SuperglobalsTest extends TestCase {
    public function testDoubleGlobalNum() {
      $GLOBALS['num'] = 3;
      double_global_num();
      $this->assertEquals(6, $GLOBALS['num']);
      $GLOBALS['num'] = 17;
      double_global_num();
      double_global_num();
      $this->assertEquals(68, $GLOBALS['num']);
      $GLOBALS['num'] = 31;
      for ($i = 0; $i < 10; $i++) double_global_num();
      $this->assertEquals(31744, $GLOBALS['num']);
      for ($i = 0; $i < 1e3; $i++) {
        $GLOBALS['num'] = rand(0, 100);
        $exponent = rand(0, 10);
        $answer = $GLOBALS['num'] * 2 ** $exponent;
        for ($k = 0; $k < $exponent; $k++) double_global_num();
        $this->assertEquals($answer, $GLOBALS['num']);
      }
    }
    public function testSetQuery() {
      set_query("Google");
      $this->assertEquals("Google", $_GET['query']);
      set_query("Superglobals site:w3schools.com");
      $this->assertEquals("Superglobals site:w3schools.com", $_GET['query']);
      set_query("Who will win the 2017 US President election?");
      $this->assertEquals("Who will win the 2017 US President election?", $_GET['query']);
      for ($i = 0; $i < 1e3; $i++) {
        set_query($query = $this->randomToken());
        $this->assertEquals($query, $_GET['query']);
      }
    }
    public function testSetEmail() {
      set_email("dleung@connect.kellettschool.com");
      $this->assertEquals("dleung@connect.kellettschool.com", $_POST['email']);
      set_email("donaldsebleung@codewars.com");
      $this->assertEquals("donaldsebleung@codewars.com", $_POST['email']);
      set_email("no-reply@codewars.com");
      $this->assertEquals("no-reply@codewars.com", $_POST['email']);
      for ($i = 0; $i < 1e3; $i++) {
        set_email($email = $this->randomToken() . "@codewars.com");
        $this->assertEquals($email, $_POST['email']);
      }
    }
    protected function randomToken() {
      return implode(array_map(function () {return "abcdefghijklmnopqrstuvwxyz0123456789"[rand(0, 35)];}, range(1, 20)));
    }
  }