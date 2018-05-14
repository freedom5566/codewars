<?php

function createArray($number){
  $newArray = array();
  
  for($count = 1; $count <= $number; $count++){
    $newArray[] = $count;
  }
  
  return $newArray;
}