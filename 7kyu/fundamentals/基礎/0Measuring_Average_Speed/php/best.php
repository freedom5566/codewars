<?php
function calculate_speed($distance, $time) {
    $distance = intval(str_replace('k', '000', $distance));
    $time = intval($time) * (strpos($time, 'min') !== false ? 60 : 1);
    return round($distance / $time * 2.23694) . 'mph';
  }

  function calculate_speed($distance, $time) {
    substr($distance, -2) == "km" ? $distance = $distance * 1000 : $distance = $distance;
    substr($time, -3) == "min" ? $time = $time * 60 : $time = $time;
    return round(($distance/$time)* 2.23694)."mph";
  }

  