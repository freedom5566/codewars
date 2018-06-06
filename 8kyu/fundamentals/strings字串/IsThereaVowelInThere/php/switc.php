<?php
function isVow(array $a)
{
    $function = function ($function) 
    {
        switch ($function)
        {
            case 97: return 'a';
            case 101: return 'e';
            case 105: return 'i';
            case 111: return 'o';
            case 117: return 'u';
            default: return $function;      
        }
    };

    return array_map($function, $a);
}