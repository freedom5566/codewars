<?php

// best 1 clever 2
function late_ride(int $n): int {
    // Coding and coding ... 
    return array_sum(str_split(gmdate("H:i", $n*60)));
}
// test 解答
array_sum(str_split(~~($n / 60) . ($n % 60)));

// 我的答案......
function late_ride(int $n): int {
    if($n <60) {
      return array_sum(array_map(function($k){
        return (int) $k;
      },str_split((string) $n)));
    } else {
      $hr = (string) floor($n / 60);
      $mi = (string) $n % 60;
      return array_sum(array_map(function($o){
        return (int) $o;
      },str_split($hr.$mi)));
    }
}


function late_ride(int $n): int {
    return array_sum(str_split(date("is", $n)));
}
   