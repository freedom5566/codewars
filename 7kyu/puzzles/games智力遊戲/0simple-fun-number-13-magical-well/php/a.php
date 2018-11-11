<?php
function magical_well(int $a, int $b, int $n) {
  return $n === 0 ? 0 : $a * $b + magical_well($a + 1, $b + 1, $n - 1);
}
function magical_well($a, $b, $n) {
    $sum = 0;
    for($i =0;$i<$n;$i++){
    $sum += $a * $b;
    $a+=1;
    $b+=1;
    
    }
    return $sum;
  }
function magical_well($a, $b, $n) {
    $total = 0;
    for($i=0; $i <$n; $i++){
      $total += ($a+$i)*($b+$i);
    }
    return $total;
  }