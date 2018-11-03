<?php
function is_same_language($a) {
    return 1 === count(array_unique(array_map(function($value){
     return $value['language'];
   },$a)));
 }
 