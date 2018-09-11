<?php
function invert(array $a): array {
    return array_map(function ($n) {return -$n;}, $a);
}