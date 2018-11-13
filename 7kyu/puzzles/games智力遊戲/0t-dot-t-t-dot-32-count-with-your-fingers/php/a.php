<?php

// 想了兩天只拿的出這種超花時間的解法 orz
function which_finger($n) {
    $data = ['Thumb','Index finger','Middle finger','Ring finger','Little finger'];
    $i = $j = 0;
    $arr='';
    while($j<$n){
      if($i < count($data)-1){
        $arr=$data[$i];
        $i++;
      } else{
        $data =array_reverse($data);
        $i=0;
        $arr = $data[$i];
        $i=1;
      }
      $j++;
    }
    return $arr;
}
function which_finger($n) {
    return ['Thumb', 'Index finger', 'Middle finger', 'Ring finger', 'Little finger',
    'Ring finger', 'Middle finger', 'Index finger'][($n-1) % 8];
}
function which_finger($n) {
    if ($n <= 5) {
      return ['Thumb', 'Index finger', 'Middle finger', 'Ring finger', 'Little finger'][$n-1];
    }
    $x = ceil(($n - 5) / 4);
    $r = (4*$x + 5) - $n;
    
    if ($x % 2) {
      return ['Thumb', 'Index finger', 'Middle finger', 'Ring finger'][$r];
    }
    return ['Little finger', 'Ring finger', 'Middle finger', 'Index finger'][$r];
}
function which_finger($n) {
    $fingers = array('Thumb', 'Index', 'Middle', 'Ring', 'Little');
    $n -= 5;
    $m = (integer)($n / 4) + 1;
    if ($n % 4 == 0) {
      $m -= 1;
    }
    $k = $n - ($m - 1) * 4 - 1;
    $finger = $m % 2 != 0 ? $fingers[3 - $k] : $fingers[$k + 1];
    if ($finger == "Thumb") { //Following code is here because it is something strange with test
      return $finger;
    } else {
      return $finger . " finger";
    }
}