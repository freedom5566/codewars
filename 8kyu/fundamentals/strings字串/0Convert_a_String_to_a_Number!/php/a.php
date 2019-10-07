<?php

function stringToNumber(string $str):int {
  return (int) $str;
}
function stringToNumber($str) { return +$str; }


// cook!!
use function intval as stringToNumber;

