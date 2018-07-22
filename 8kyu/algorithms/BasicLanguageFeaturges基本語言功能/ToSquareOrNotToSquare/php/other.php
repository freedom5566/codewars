<?php
function squareOrSquareRoot($array) {
    $opt = array();
    foreach ($array as $value) {
      $opt[] = (fmod(sqrt($value), 1) == 0) ? sqrt($value) : pow($value, 2);
    }
    return $opt;
  }