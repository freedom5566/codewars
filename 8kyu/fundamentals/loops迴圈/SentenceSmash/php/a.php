<?php

function smash(array $words): string {
    //trim是針對字串
    return trim(implode(" ", $words));
}