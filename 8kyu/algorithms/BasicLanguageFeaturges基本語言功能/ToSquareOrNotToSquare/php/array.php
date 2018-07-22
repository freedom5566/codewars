<?php
function squareOrSquareRoot($array) {
    $niz=[];
  for ($i=0; $i <count($array) ; $i++) {
    $koren =sqrt($array[$i]);
    if (floor($koren)!=$koren) {
    array_push($niz, pow($array[$i],2));
  }elseif(pow($koren,2)==$array[$i]){
  array_push($niz,sqrt($array[$i]));
    }
  }return($niz);
  
  
  }