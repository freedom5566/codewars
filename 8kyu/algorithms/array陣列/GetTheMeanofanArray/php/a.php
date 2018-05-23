<?php

function get_average($a) {
  return intval(array_sum($a) / count($a));
}