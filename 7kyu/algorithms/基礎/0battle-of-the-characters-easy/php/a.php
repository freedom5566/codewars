<?php
function battle($x, $y) {
    $list = array_combine(range('A','Z'),range(1,26));
      $ba1 = array_sum(array_map(function($n) use ($list){
          return $list[$n];
      },str_split($x)));
      $ba2 = array_sum(array_map(function($n) use ($list){
          return $list[$n];
      },str_split($y)));
      if($ba1 === $ba2) return 'Tie!';
      return $ba1>$ba2?$x:$y;
  }
  
// best

function power($s) {
    return array_sum(array_map(function($e) {
      return ord($e) - 64;
    }, str_split($s)));
}
  
function battle($x, $y) {
    $l = power($x);
    $m = power($y);
  
    return ($l > $m) ? $x : (($l < $m) ? $y : "Tie!");
}