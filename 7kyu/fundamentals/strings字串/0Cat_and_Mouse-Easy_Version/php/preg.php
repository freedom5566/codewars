<?php
function cat_mouse(string $s): string {
    return preg_match('/C\.{0,3}m/', $s) ? 'Caught!' : 'Escaped!';
}