<?php

function twoSort($s) {
    asort($s);
    return implode('***', str_split(array_shift($s)));
}