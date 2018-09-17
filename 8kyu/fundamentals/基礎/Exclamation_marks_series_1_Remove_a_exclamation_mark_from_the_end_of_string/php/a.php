<?php

function remove(string $s): string {
  // Coding and coding ...
  if (substr($s,-1)!=='!') return $s;
  return substr($s,0,-1);
}