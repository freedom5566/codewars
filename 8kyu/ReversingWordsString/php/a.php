<?php

function reverse($string) {
    // Your code here
    return implode(" ", array_reverse(explode(" ", trim($string))));
  
}