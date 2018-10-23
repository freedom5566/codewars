<?php
function freq_seq(string $s, string $sep): string {
    $results = [];

    $chars = str_split($s);
    $countValues = array_count_values($chars);
    foreach ($chars as $char) {
        $results[] = $countValues[$char];
    }

    return implode($sep, $results);
}

function freq_seq(string $s, string $sep): string {
    $s = str_split($s);
    $dict = array_count_values($s);
    return join($sep, array_map(function ($char) use ($dict) {
      return $dict[$char];
    }, $s));
  }

  function freq_seq(string $s, string $sep): string {
    for ($i = 0; $i < strlen($s); $i++) {
        $count [] = substr_count($s, $s[$i]);
    }
    return  implode($count,$sep);
}

function freq_seq(string $s, string $sep): string {
    return join($sep, array_map(function($c) use ($s) {return substr_count($s, $c);}, str_split($s)));
  }