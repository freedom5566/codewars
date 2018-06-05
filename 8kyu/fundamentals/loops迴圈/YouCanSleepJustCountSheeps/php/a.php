<?php

function countsheep($num){
    //your code here
    $str=[];
    for($i=1;$i<=$num;$i++){
      $str[$i]=$i." sheep...";
    }
    return implode($str);
}