<?php
function squareOrSquareRoot(array $a): array {
  return array_map(function ($n) {
      return sqrt($n) == intval(sqrt($n))
        ? sqrt($n) 
        : $n ** 2;
    
    }, $a);
}