<?php

function scramble($str,$arr){
    $s =[];
    foreach($arr as $inx => $num) {
      $s[$num] = $str[$inx];
    }
    ksort($s);
    return implode($s);

}

function scramble($str,$arr){
    $a = array_combine($arr,str_split($str));
    ksort($a);
    return implode('', $a);
}

//不用排序！！
function scramble($str, $arr) {
    $newStr = $str;
    for ($i = 0; $i < strlen($str); $i++) {
      $newStr[$arr[$i]] = $str[$i];
    }
    return $newStr;
}
  
  