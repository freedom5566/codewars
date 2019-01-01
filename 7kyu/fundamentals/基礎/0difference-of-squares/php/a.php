<?php
function difference_of_squares(int $n): int {
    $a=$b=0;
      for($i=1 ;$i<=$n;$i++){
          $a+=$i;
          $b += pow($i,2);
      }
      return pow($a,2)-$b;
  }
  
// clever
function difference_of_squares(int $n): int {
    return $n ** 2 * ($n + 1) ** 2 / 4 - $n * ($n + 1) * (2 * $n + 1) / 6;
}  