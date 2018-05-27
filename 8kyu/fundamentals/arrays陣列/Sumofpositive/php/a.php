<?php
function positive_sum(array $arr) {
    // Your code here
    //return empty($arr)?0:array_sum(array_filter($arr,"is_positive"));
    $num=0;
    foreach($arr as $value){
      if($value>0){
        $num+=$value;
      }
    }
    return $num;
  }

  function is_positive($num){
  
    //return is_int($num)?(int)floor($num)>0:0;
  }