<?php
function twoSort($s) {
    sort($s);
    $s=str_split($s[0]);
    $data=array();
    $i=0;
    foreach($s as $value){
      if((count($s)-1)>$i){
        $data[]=$value."***";
      }else{
        $data[]=$value;
      }
      $i++;
    }
    return implode($data);
}