<?php
// 我的解答
function digits_explode(string $s): string {
    return implode(array_map(function($n){
      
      return str_repeat((string) $n,(int) $n);
    },str_split($s)));
}

// best
function digits_explode(string $s): string {
    return str_replace([0,1,2,3,4,5,6,7,8,9],["",1,22,333,4444,55555,666666,7777777,88888888,999999999],$s);

}
// clever
function digits_explode(string $s): string {
    $filler = function (string $digit) {
      return str_pad('', (int)$digit, $digit);
    };
    return implode('', array_map($filler, str_split($s)));
}
  