<?php
function nbDig(int $n, int $d) : int {
    $count = 0;
    for ($i = 0; $i <= $n; $i++) {
        $count += substr_count((string)(pow($i, 2)), (string)$d);
    }
    return $count;
}