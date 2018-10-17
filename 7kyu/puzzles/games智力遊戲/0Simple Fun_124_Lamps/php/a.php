<?php
function lamps(array $a): int {
    $j =0;
    for($i=0,$len=count($a);$i<$len;$i++){
      if($len-1 !==$i){
        if($a[$i] === 0){
          if($a[$i+1]!=1){
            $a[$i+1] = 1;
            $j++;
          }
          
        }
        if($a[$i] === 1){
          if($a[$i+1]!=0) {
            $a[$i+1] = 0;
            $j++;
          }
        
        }
      }
      
    }
    return ($len-$j)<$j?$len-$j:$j;
  }