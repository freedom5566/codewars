<?php
function past($h, $m, $s) {
    $output =0;
    if ($h <=23 || $h >=0) {
      $output += $h*60*60*1000;
    }
    if ($m <= 59 || $m >=0) {
      $output += $m *60*1000;
    }
    if ($s <= 59 || $s >= 0) {
      $output += $s *1000;
    }
    return $output;
  }