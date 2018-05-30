<?php

function sumArray($array) {
  
    
    return empty($array)?0:count($array)==1?0:array_sum($array)-min($array)-max($array);
}