<?php

function calculator($a, $b, $sign) {
    if (is_string ($a) || is_string ($b)) {  return 'unknown value'; }
    switch ($sign) {
      case "+" : return $a + $b ;
      case "-" : return $a - $b ;
      case "*" : return $a * $b ;
      case "/" : return $a / $b ;
      default : return 'unknown value';
    }
  }