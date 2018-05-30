<?php
function countPositivesSumNegatives($input) {
    if(empty($input)){
      return [];
      exit;
    }
    $arr[0]=0;
    $arr[1]=0;
    foreach($input as $num){
      if($num>0) $arr[0]++;
      else $arr[1]+=$num;
    } 
    return $arr;
}