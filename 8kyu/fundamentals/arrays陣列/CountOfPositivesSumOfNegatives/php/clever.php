<?php
function countPositivesSumNegatives($input) {

    if (empty($input)) return [];
  
    $positive = 0;
    $negative = 0;
    foreach($input as $number) {
      $number > 0 ? $positive++ : $negative += $number;
    }
    
    return [$positive, $negative];
  }