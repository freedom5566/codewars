<?php
function isIsogram($string) {
  return (!$string || strlen($string) === count(array_unique(str_split(strtolower($string)))));
}