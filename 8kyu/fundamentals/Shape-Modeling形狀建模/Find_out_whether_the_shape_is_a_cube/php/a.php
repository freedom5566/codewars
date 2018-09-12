<?php


function cubeChecker($volume, $side){

if($volume <= 0 || $side <= 0)
{
  return false;
}

return ($side * $side * $side === $volume) ? true : false;
}