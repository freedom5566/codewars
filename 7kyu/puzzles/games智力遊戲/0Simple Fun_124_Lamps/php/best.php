<?php
function lamps(array $a): int {
    $n1 = $n2 = 0;
    foreach ($a as $i => $x) if ($i % 2 == $x) $n1++; else $n2++;
    return min($n1, $n2);
  }