<?php
function evaporator($content, $evap_per_day, $threshold) {
    // your code
    $j=0;
    $i=100;
    while($i>$threshold){
      $i = $i - $i*($evap_per_day/100);
      $j++;
    }
    return $j;
}