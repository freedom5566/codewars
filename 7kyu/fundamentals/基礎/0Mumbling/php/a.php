<?php
function accum($s) {
    // your code
    $data="";
    $sum=count(str_split($s));
    foreach (str_split($s) as $key => $value){
      if ($key===0) $data .= strtoupper($value).'-';
      if ($key!==0) $data .= strtoupper($value);
      if ($key!==0) {
        $i = 0;
        while($i<=$key-1) {
          $data .=strtolower($value);
          $i++;
        }
        if($sum !== $key+1)$data .='-';
      }
      
    }
    return $data;
}