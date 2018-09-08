<?php
function replace_dots(string $str): string {
    return strtr($str, '.', '-');
}