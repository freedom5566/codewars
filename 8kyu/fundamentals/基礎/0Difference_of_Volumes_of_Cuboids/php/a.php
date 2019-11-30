<?php

function findDifference($a, $b) {
    return abs(array_product($a) - array_product($b));
}


function findDifference($a, $b) {
    $asum = array_product($a);
    $bsum = array_product($b);
    return max($asum, $bsum) - min($asum, $bsum);
}