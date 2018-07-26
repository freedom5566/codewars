<?php

function remove(string $s): string {
  return str_replace('!', '', $s) . '!';
}