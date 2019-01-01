<?php
// best 
function sum_of_integers_in_string(string $s): int {
    return array_sum(preg_split("@[^\d]@",$s));
}

// 我的答案

function sum_of_integers_in_string(string $s): int {
    preg_match_all('!\d+!', $s, $matches);  
    return array_sum($matches[0]);
}