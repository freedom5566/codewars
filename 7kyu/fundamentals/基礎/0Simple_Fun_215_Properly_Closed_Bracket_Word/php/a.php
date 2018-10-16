<?php
function closed_bracket_word(string $word): bool {
    $en =array_combine(range('a','z'),range('z','a')); 
    for($len = strlen($word),$i=0;$i<$len;$i++){
      $data[]=array_keys($en,$word[$i])[0];
    }
     return strrev($word) === implode($data);
     
  }
  