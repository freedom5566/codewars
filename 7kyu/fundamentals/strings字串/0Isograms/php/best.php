<?php
function isIsogram($string) {
    $lowerCase = strtolower($string);
    foreach (count_chars($lowerCase, 1) as $i => $val) {
        if ($val > 1) {
            return false;
        }
    }
    
    return true;
}