<?php
function isIsogram($word) {
    if($word==="") return true;
    $str=strtolower($word);
    $o=$p=0;
    for ($i = 0; $i < strlen($word); $i++) {
       if (substr_count($str, $str[$i]) === 1) {
          $o++;
       } else{
          $p++; 
           
       }
    }
    return $p?false:true;
}