<?php
function datingRange($age) {
    #return min-max
    if($age>=1 && $age<=100){
      if($age<=14){
      
        return (int)($age-0.10 * $age) ."-".(int)($age+0.10*$age);
      } else {
        return (int)($age/2+7)."-".(int)(($age-7)*2);
      }
    }
}