<?php
function maps($x)
{
  return array_map(function($el) {
    return $el * 2;
  }, $x);
}