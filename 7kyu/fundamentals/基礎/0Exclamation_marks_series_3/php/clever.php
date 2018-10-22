<?php
function remove(string $s): string {
    $postfix = preg_replace('/(.+)[^!+$]/', '', $s);
    return str_replace('!', '', $s) . $postfix;
}