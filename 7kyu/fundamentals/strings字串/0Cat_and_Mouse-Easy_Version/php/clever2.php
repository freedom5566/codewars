<?php
function cat_mouse(string $s): string {
    return strlen($s)<6?'Caught!':'Escaped!';
}