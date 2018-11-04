<?php
function number_joy(int $n): bool {
    $s = str_split((string) $n);
    $tmp1 = (int) array_sum($s);
    $tmp2 = (int) strrev((string) $tmp1);
    
    return $tmp1 * $tmp2 === $n;
  }
  