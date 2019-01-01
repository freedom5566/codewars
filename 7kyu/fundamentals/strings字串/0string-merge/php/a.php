<?php
function stringMerge($string1, $string2, $letter) {
    return strstr($string1,$letter,true).strpbrk($string2,$letter);
  }
  
// 雙 strstr
function stringMerge($string1, $string2, $letter) {
    return strstr($string1, $letter, true) . strstr($string2, $letter);
}