<?php

function grow($a) {
  // Your code here
  $data=1;
  foreach($a as $value){
    $data*=$value;
  
  }
  return $data;
}