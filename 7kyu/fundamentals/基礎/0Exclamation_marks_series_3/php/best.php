<?php
function remove(string $s): string {
    $count = 0;
    while (substr($s, -1) == '!') {
      ++$count;
      $s = substr($s, 0, -1);
    }
    return str_replace('!', '', $s) . str_repeat('!', $count);
  }