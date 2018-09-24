<?php
function cat_mouse(string $s): string {
    return substr_count($s,'.') > 3 ? 'Escaped!' : 'Caught!';
}