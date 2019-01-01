<?php
function scratch(array $lottery): int {
    $lot = array_map(function($n){
          $a =substr_count($n,strstr($n,' ',true));
          if($a === 3) return explode(' ',$n)[3];
      },$lottery);
      return array_sum($lot);
  }
  
//best  
function scratch(array $lottery): int {
    $total = 0;
    for($i = 0; $i < count($lottery); $i++) {
      if(preg_match('/^(\w+\s)\1{2}(\d+)$/', $lottery[$i], $match)) {
        $total += $match[2];
      }
    }
    return $total;
  }  