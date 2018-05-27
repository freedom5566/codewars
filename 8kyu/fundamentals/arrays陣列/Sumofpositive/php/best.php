<?php

function positive_sum($a) {
    return array_sum(array_filter($a, function ($n) {return $n > 0;}));
  }