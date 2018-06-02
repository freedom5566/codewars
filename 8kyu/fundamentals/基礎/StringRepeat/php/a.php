<?php

function repeatStr($n, $str)
{
  $st=array();
  for($i=0;$i<$n;$i++){
    $st[$i]=$str;
  }
  return implode($st);
}