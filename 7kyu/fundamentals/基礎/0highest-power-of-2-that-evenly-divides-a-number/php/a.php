<?php

// 這題我起初不知道到底在講甚麼東西，透過題目描述一步一步定位 google 沒想到在 stackover 找到解......
function solution(int $n): int {
    return $n & -$n;
}

function solution(int $n): int {
    $p = 0;
    for ($i = 0; $i < 100; $i++) {
        $z = 2 ** $i;
        if ($n % $z === 0) {
            $p = $z;
        }
        if ($z > $n) {
            return $p;
        }
    }
}
  
  