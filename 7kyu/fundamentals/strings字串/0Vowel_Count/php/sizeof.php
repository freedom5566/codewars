<?php
function getCount($str) {
  
    $findLetters = ['a', 'e', 'i', 'o', 'u'];
    // enter your magic here
    
    return sizeof(array_intersect(str_split($str), $findLetters));
  }
  