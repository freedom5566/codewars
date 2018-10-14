<?php
function getCount($str) {
    $vowelsCount = 0;
    
    foreach(['a','e','i','o','u'] as  $value){
     $vowelsCount+= substr_count($str,$value);
    }
    
    return $vowelsCount;
  }
  
  
//   function getCount($str) {
//     return preg_match_all('[a|e|i|o|u]',$str);
//   }
  