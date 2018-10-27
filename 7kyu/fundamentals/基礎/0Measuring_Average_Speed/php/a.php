<?php
function calculate_speed($distance, $time) {
    $arr = preg_split('/(?<=[0-9])(?=[a-z]+)/i',$distance);
    $sarr = preg_split('/(?<=[0-9])(?=[a-z]+)/i',$time);
    $m = $s = 0;
    if($arr[1]==='km'){
      $m =$arr[0]*1000;
    } else{
      $m = $arr[0];
    }
    if($sarr[1]==='min'){
      $s = $sarr[0]*60;
    } else {
      $s = $sarr[0];
    }
    return round(($m/$s)*2.23694).'mph';
  }
  