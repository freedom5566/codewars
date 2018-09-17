<?php

function replace(string $s): string {
    return preg_replace('/[aeiou]/i', "!", $s);
}