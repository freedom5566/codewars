<?php

// 我的答案
function danspower(int $num, int $power): int {
    $a = pow($num, $power);
      if($a %2 ===0){
          return $a;
      } else{
          return round($a, -1);
      }
}
function danspower(int $num, int $power): int {
    return ($num = pow($num, $power)) & 1 ? round($num, -1) : $num;
}