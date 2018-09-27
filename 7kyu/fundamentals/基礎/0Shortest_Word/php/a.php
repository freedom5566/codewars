<?php
function findShort($str){
    $data=[];
    foreach(explode(' ',$str) as $value){
      $data[]=strlen($value);
    }
    return min($data);
}