<?php

function abbrevName($name)
{
  return strtoupper(implode('.',array_map(function($n){return $n[0];},explode(' ',$name))));
}