<?php

function product($a) {
    if (!$a) return null;
    return array_product($a);
}