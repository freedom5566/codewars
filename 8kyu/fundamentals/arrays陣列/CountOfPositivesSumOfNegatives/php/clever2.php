<?php
function countPositivesSumNegatives($input) {
    if (empty($input)) {
      return [];
    }
    
    $positives = array_filter($input, function($i) { return $i > 0; });
    $negatives = array_filter($input, function($i) { return $i < 0; });
    
    return [count($positives), array_sum($negatives)];
  }