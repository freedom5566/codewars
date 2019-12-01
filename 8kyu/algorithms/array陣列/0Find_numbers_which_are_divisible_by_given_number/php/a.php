<?php


function divisibleBy($numbers, $divisor) {
  return array_values(array_filter($numbers, function($n) use ($divisor){return $n % $divisor == 0;}));
}


// 這邊完全忘記回傳是 true 才會保留，如果我直接 return 0 是會被篩掉的
function divisibleBy($n, $d) {
    return array_values(array_filter($n,function($arr) use ($d){
    
      if ($arr%$d ===0) {
        return ($arr !== false && $arr !== null && $arr !== '');
      }
   
    }));
}