<?php
// 我的答案
function apple_boxes(int $k): int {
    $odd = $even = 0;
    foreach(range(1,$k) as $applebox){
      if($applebox % 2 ===0){
          $even += $applebox * $applebox;
      } else {
          $odd += $applebox * $applebox;
      }
    }
  
    return $even - $odd; 
  }
  

// best

function apple_boxes(int $n): int {
    return  ($n & 1 ? -1 : 1) * $n * ($n + 1) / 2 ;
}