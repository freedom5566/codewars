<?php
function geometric_sequence_elements(int $a, int $r, int $n): string {
    $str =[];
    $str[] =$a;
    for($i=0;$i<$n-1;$i++){
    $str[] = $str[$i]*$r;
    }
    return implode(', ',$str);
}

function geometric_sequence_elements(int $a, int $r, int $n): string 
{
    $numbers = $a;
    while(--$n) $numbers .= ', ' . $a *= $r;
    return $numbers;
}
function geometric_sequence_elements($a, $r, $n)
{
    $seq = [];

    for ($i = 0; $i < $n; $i++) {
        $seq[] = $a * ($r ** $i);
    }

    return implode(', ', $seq);
}