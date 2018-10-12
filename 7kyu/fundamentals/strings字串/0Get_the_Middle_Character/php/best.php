<?php
function getMiddle($text) {
    $len = strlen($text);
    if ($len % 2 === 0) {
      return substr($text, $len / 2 - 1, 2);
    }
    return substr($text, $len / 2, 1);
  }