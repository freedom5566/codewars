<?php
function digit_degree($n) {
    $a = 0;
    while($n>9){
      $n = array_sum(str_split($n));
      $a++;
    }
    return $a;
}


function digit_degree(int $n): int {
    return $n < 10 ? 0 : 1 + digit_degree(array_sum(str_split(strval($n))));
}
// 偷看別人qq
function addDigits(int $n,int $m)
{
    if($n < 10) return $m;
    else {
        $t = 0;
        while($n > 0){
            $t += $n % 10;
            $n /=10;
        }
        return addDigits($t, $m + 1);
    }
}
function digit_degree(int $n)
{
    return addDigits($n, 0);
}
