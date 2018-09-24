<?php

function cat_mouse(string $s): string {
    $i=0;
    foreach(str_split($s) as $value){
      if($value==='.'){
        $i++;
      }
      if($value==='C' && $i>=3){
        $i=0;
      }
      if($value ==='m' && $i===2) {
        
        return 'Caught!';
      }
    }
    return $i>3?'Escaped!':'Caught!';
}