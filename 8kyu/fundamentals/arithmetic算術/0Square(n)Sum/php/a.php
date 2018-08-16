<?php

function square_sum($numbers) : int {
  // Write your code here...
  $data=0;
  foreach($numbers as $value){
    $data+=pow($value,2);
    
  }
  return $data;
}