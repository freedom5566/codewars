<?php

function twoSort($s) {
    sort($s);
    return implode("***", str_split($s[0], 1));
}