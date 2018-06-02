<?php

// function is_palindrome($line) {
//   return is_int($line)?(int)strrev((string)$line)==$line?true:false:strrev($line)==$line?true:false;
// }
function is_palindrome($line) {
    return $line == strrev($line);
  }