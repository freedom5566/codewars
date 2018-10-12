<?php
function getMiddle($text) {
    $len = strlen($text);
    return $len%2?substr($text,floor($len/2),1):$text[$len/2-1].$text[$len/2];
  }