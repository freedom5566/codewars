<?php

function squareOrSquareRoot($array) {
  $data=array();
  foreach($array as $value){
    if(sqrt($value)===floor(sqrt($value))){
      $data[]=sqrt($value);
    } else{
      $data[]=$value*$value;
    }
  }
  return $data;
}
