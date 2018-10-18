<?php
function remove(string $s): string {
    return implode(" ", array_map(function ($w) {return !preg_match('/!$/', $w) ? $w . "!" : (preg_match('/[^!]!$/', $w) ? preg_replace('/!$/', "", $w) : $w);}, explode(" ", $s)));
  }