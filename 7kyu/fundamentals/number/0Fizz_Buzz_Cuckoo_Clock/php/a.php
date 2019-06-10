<?php

function fizzBuzzCuckooClock($time) {
    $minute =(int) substr($time,-2,2);
      
      if($minute === 0){
          $cuckooCount = (int) date("g", strtotime($time));
          return rtrim(str_repeat('Cuckoo ',$cuckooCount));
      }
      if($minute === 30) return 'Cuckoo';
      if($minute % 3 === 0 && $minute % 5 ===0) return 'Fizz Buzz';
      if($minute % 3 === 0) return 'Fizz';
      if($minute % 5 ===0) return 'Buzz';
      return 'tick';
  }
  
  
  
  
function fizzBuzzCuckooClock($time) {
    list($h,$m) = explode(':',$time);
    
    if($m == 30)
      return 'Cuckoo';
    
    if($m == '00')
      return trim(str_repeat('Cuckoo ', ($h%12 == 0?12:$h%12)));
    
    if($m%3==0 && $m%5==0)
      return 'Fizz Buzz';
    
    if($m%3==0)
      return 'Fizz';

    if($m%5==0)
      return 'Buzz';
    
    return 'tick';
}