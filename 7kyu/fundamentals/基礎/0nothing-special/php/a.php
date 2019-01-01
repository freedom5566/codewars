<?php
// best

function nothing_special($s): string {
    return is_string($s)?preg_replace("/[^a-z0-9\s]/i", '', $s):'Not a string!';
}
function nothing_special($s): string {
    if(is_string($s) === false) return 'Not a string!';
    return preg_replace("/[^0-9a-zA-Z\s]/", "", $s);
}
  