<?php
function cat_mouse(string $s): string {
    return abs(strpos($s, 'C') - strpos($s, 'm')) < 5 ? 'Caught!' : 'Escaped!';
}