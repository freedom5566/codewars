<?php
function isVow(array $a)
{
    $vows = str_split('aeiou');
    return array_map(function($code) use ($vows) {
        $char = chr($code);
        return in_array($char, $vows) ? $char : $code;
    }, $a);
}