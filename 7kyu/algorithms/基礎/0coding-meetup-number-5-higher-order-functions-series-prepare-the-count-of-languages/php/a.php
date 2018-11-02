<?php
function count_languages($a) {
    // Thank you for checking out the Coding Meetup Kata :D
     return array_count_values(array_map(function($n){
          return $n['language'];
     },$a));
  }
  