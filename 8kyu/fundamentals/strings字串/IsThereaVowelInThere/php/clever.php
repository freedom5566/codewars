<?php
function isVow(array $a) {
    return array_map('replaceVowel', $a);
  }
  
  function replaceVowel($number) {
    if (strpos('aeoiu', chr($number)) !== false) {
      return(chr($number));
    }
    return $number;
  }