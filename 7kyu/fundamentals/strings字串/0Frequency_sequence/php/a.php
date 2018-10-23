<?php
function freq_seq(string $s, string $sep): string {
    $data = str_split($s);
    $list = array();
    foreach(array_unique($data) as $value){
      $list[$value]=substr_count($s,$value);
    };
    return implode($sep,array_map(function ($v) use ($list){
      return $list[$v];
    },$data));
  }