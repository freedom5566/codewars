<?php
function remove(string $s, int $n): string {
    return implode("", explode("!", $s, $n+1));
  }