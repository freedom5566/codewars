<?php

function correct($string) {
    return preg_replace(['/0/', '/1/', '/5/'], ['O', 'I', 'S'], $string);
}