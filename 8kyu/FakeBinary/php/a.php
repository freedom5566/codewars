<?php

function fake_bin(string $s): string {
  // Write your code here
  return preg_replace(array('/[0-4]/', '/[5-9]/'), array('0', '1'), $s);
}