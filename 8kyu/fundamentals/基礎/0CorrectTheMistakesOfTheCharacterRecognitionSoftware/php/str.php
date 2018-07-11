<?php

function correct($string) {
    return str_replace(["5", "0", "1"], ["S", "O", "I"], $string);
}