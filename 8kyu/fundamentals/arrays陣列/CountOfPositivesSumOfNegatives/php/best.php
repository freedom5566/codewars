<?php
function countPositivesSumNegatives($input) {
    if (empty($input)) {
      return [];
    }
    
    $pos = $neg = 0;
    foreach ($input as $value) {
      if ($value > 0) {
        $pos += 1;
      } else {
        $neg += $value;
      }
    }
    
    return [$pos, $neg];
}