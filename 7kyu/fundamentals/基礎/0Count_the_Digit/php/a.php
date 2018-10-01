<?php

function nbDig($n, $d) {
    $j=0;
    if($n>=0){
    for($i=0;$i<=$n;$i++){
      $k=$i**2;
      foreach(str_split((string)$k) as $value){
        if($d===(int)$value){
          $j++;
        }
      }
    }
    return $j;
    }
}