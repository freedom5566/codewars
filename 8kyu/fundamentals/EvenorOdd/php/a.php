<?php


function even_or_odd(int $n): string {
  return $n % 2 ? "Odd" : "Even";
}

function even_or_odd_clever(int $n): string {
    return ($n & 1) ? "Odd" : "Even";
  }