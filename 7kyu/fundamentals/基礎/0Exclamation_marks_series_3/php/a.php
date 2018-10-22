<?php
function remove(string $s): string {
 
  
    $rev = strrev($s);
      $len = strlen($s);
      $j =0;
      for($i =0;$i<$len;$i++){
        if($rev[$i] != '!') break;
        $j++;
      }
      return str_replace('!', '', $s).str_repeat('!',$j);
        
    }