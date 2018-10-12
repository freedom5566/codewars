<?php
function getMiddle($text) {
    $start = floor((strlen($text) - 1) / 2);
    $len = strlen($text) % 2 ? 1 : 2;
    return substr($text, $start, $len);
    
  }