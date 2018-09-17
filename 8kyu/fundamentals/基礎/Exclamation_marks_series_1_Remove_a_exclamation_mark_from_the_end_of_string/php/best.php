<?php

function remove(string $s): string {
    return preg_replace('/!$/', "", $s);
}