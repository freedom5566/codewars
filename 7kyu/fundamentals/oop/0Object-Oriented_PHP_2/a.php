<?php
class Person {
    public $first_name;
    public $last_name;
    public function __construct($first_name, $last_name) {
      $this->first_name = $first_name;
      $this->last_name = $last_name;
    }
    public function get_full_name() {
      return "$this->first_name $this->last_name";
    }
  }