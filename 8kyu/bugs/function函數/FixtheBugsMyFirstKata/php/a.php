<?php

function my_first_kata($a, $b) {
    return is_numeric($a) and is_numeric($b) ? ($a % $b) + ($b % $a) : false;
}