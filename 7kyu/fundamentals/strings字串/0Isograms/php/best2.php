<?php
function isIsogram($string) {
  if (empty($string)){
    return true;
  }
  
  $array = str_split(strtolower($string));
  return (count($array) === count(array_unique($array)));
}