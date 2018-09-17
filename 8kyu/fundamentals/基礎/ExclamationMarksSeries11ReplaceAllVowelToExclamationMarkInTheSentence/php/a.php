<?php

function replace(string $s): string {
 return str_replace(str_split('aeiouAEIOU'), '!', $s);
}