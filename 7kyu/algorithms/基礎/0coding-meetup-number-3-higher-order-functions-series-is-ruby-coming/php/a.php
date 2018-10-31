<?php
function is_ruby_coming($a) {
    // Thank you for checking out my Kata :D
    return in_array(true,array_map(function($n){
      if($n['language'] === 'Ruby') return true;
    },$a));
  }
  