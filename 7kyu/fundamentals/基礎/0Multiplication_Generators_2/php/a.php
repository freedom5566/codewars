<?php
function generator($a) {
    while(true){
      $i++;
      yield $a .' x '. $i .' = '.$a*$i;  
    }
  }