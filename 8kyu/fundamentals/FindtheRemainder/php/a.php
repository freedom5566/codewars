<?php
function remainder($a, $b) {
    // Divide the larger argument by the smaller argument and return the remainder
    return ($a == 0 || $b == 0) ? null : max($a,$b) % min($a,$b);
}