<?php

// best 8 clever 16
// preg_split 厲害了...
function sum_from_string(string $str): int {
    return array_sum(preg_split('/[^0-9]/', $str));
}

// 我的答案

function sum_from_string(string $str): int {
    preg_match_all('!\d+!', $str, $matches);
    return array_sum($matches[0]);
}
  