<?php
class President {
    public $name = "Barack Obama";
    public function greet($name) {
      return "Hello $name, my name is Barack Obama, nice to meet you!";
    }
  }
  $us_president = new President;
  $president_name = $us_president->name;
  $greetings_from_president = $us_president->greet("Donald");