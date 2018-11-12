<?php

function magnitude($v) {
    return sqrt(array_reduce($v, function ($s, $n) {return $s + $n ** 2;}, 0));
}
function magnitude($vector) {
    $len = count($vector);
    if($len < 1 && $len > 101) return 0;
    foreach($vector as $key => $value){
      $vector[$key]= abs($value) ** 2;
    }
    return sqrt(array_sum($vector));
}
function magnitude($vector) {
    $a = array_map(function($v){return pow($v, 2);}, $vector);
    return sqrt(array_sum($a));
}
function magnitude($vector) {
    $callback = function($a, $b) {
        return $a + $b ** 2;
    };
    return sqrt(array_reduce($vector, $callback));
}
  