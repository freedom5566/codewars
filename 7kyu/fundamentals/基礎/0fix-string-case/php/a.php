<?php
function solve($s) {
    $a = $b = 0;
      for($i=0,$j=strlen($s);$i<$j;$i++){
          if(ord($s[$i])<93){
              $a++;
          } else {
              $b++;
          }	
      }
      if($a>$b){
          return strtoupper($s);
      } else {
          return strtolower($s);
      }
      return strtolower($s);
}

// best

function solve($s) {
    $upper = preg_match_all("/[A-Z]/", $s);
    $lower = preg_match_all("/[a-z]/", $s);
    return ($upper > $lower)? strtoupper($s): strtolower($s);
}
  
  