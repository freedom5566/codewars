<?php
function number_joy(int $n): bool {
    $sum = array_sum(str_split((string) $n));
    return $n == ((int) strrev($sum) * (int) $sum);
  }