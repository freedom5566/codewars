<?php
function multiply($x, $y){
    return $x * $y;
}

function grow($a) {
    return array_reduce($a, 'multiply', 1);
}