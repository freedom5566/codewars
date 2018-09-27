<?php

function findShort($str){
    return min(array_map('strlen', (explode(' ', $str))));
}