<?php
function remove(string $s): string {
    return join(' ', array_map(function($w) {
      if (preg_match('/[^\!]$/', $w)) return $w . '!';
      if (preg_match('/\!{2,}$/', $w)) return $w;
      return preg_replace('/\!$/', '', $w);
    }, explode(' ', $s)));
  }