<?php

function replace_dots(string $str): string {
  return preg_replace('/\./', '-', $str);
}