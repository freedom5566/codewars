<?php

function correct($string) {
    // todo
    $data=str_split($string);
    foreach($data as $value){
      if($value=="5"){
        $row[]="S";
      } else if($value=="0"){
        $row[]="O";
      } else if($value=="1"){
        $row[]='I';
      } else {
        $row[]=$value;
      }
      
    }
    return implode($row);
}