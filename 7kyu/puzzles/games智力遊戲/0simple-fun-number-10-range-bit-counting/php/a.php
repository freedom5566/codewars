<?php
//best
function range_bit_count(int $a, int $b): int {
  return array_sum(array_map(function($n){
    return substr_count(decbin($n), '1');
  }, range($a, $b)));
}
//
function range_bit_count(int $a, int $b): int {
    return array_sum(array_map(function($n){
        return array_sum(str_split(decbin($n)));
      },range($a,$b)));
}