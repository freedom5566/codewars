<?php
function invert(array $a): array {
    $data=array();
    if ($a) {
      foreach ($a as $value) {
        $data[]=-$value;
      }
      return $data;
    } else {
      return [];
    }
}