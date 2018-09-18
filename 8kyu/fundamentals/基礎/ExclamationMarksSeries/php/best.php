<?php

function remove(string $s, int $n): string {
    return preg_replace('/!/', "", $s, $n);
  }