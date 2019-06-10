<?php

function is_smooth(array $arr): bool {
   return $arr[0] == end($arr) && $arr[0] == array_sum(array_slice($arr, (($len = count($arr))- 1) / 2,$len&1?1:2));
}

function is_smooth(array $arr): bool {
    $len = count($arr);
    if($arr[0] !== $arr[$len-1]) return false;
    if($len % 2===0){
      $med1 = $arr[floor($len/2)];
      $med2 = $arr[floor($len/2)-1];
      $med = $med1 + $med2;
      if($med === $arr[0] && $med === $arr[$len-1]) return true;
      else return false;
      
    } else {
      $med = $arr[floor($len/2)];
      if($med === $arr[0] && $med === $arr[$len-1]) return true;
      else return false;
        
    }
}

function is_smooth(array $arr): bool {
    $n = count($arr);
    $middle = $n % 2 ? $arr[floor($n / 2)] :  $arr[$n / 2] + $arr[$n / 2 - 1];
    return ($arr[0] == $middle) && ($middle == $arr[$n - 1]);
}
  
  