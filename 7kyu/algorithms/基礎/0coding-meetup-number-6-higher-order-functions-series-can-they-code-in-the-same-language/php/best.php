<?php
function is_same_language(array $a): bool {
    return count($a) === count(array_filter($a, function ($d) use ($a) {return $d["language"] === $a[0]["language"];}));
}

function is_same_language($a) {
    return count(array_unique(array_column($a, 'language'))) == 1 ? true : false;
}