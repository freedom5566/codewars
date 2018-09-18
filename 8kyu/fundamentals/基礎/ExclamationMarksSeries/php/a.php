<?php
function remove(string $s, int $n): string {
    // Coding and coding ... 
    $s=str_split($s);
    //print_r($s);
    $j=0;
    foreach($s as $key => $value){
      if($s[$key]=='!'){
        unset($s[$key]);
        $j++;
        if($j==$n) break;
      }
    }
    return implode($s);
  }