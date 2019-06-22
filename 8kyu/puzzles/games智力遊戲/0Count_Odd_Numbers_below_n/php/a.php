<?php

// 原本解法，結果居然超時，我震驚了，隱藏測資有 PHP_INT_MAX.......
// 當下就想到這題會不會是需要運用數學解
// 結果一查，數學解只要一行......
function oddCount($n) {
    $i =0;
    foreach(xrange(1, $n-1) as $value) {
        if($value &1) {
            $i++;
        }
    }
    return $i;

}
function xrange($start, $limit) {
    for ($i = $start; $i <= $limit; $i++) {
        yield $i;
    }
}

// 數學解
function oddCount($n) {
    return $n >> 1;
}
  
// php 7 數學解
function oddCount($n) {
    return intdiv($n, 2);
}
// 數學解
function oddCount($n) {
    return floor ($n/2);
}
//數學解
function oddCount($n) {
    return round($n/2, 0, PHP_ROUND_HALF_DOWN);
}