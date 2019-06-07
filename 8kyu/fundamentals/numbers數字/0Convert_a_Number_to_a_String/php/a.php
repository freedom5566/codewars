<?php

function numberToString(int $num): string {
  return $num;
}

function numberToString( string $n ) : string {
    return (string) $n;
}

// 我的答案
function numberToString($num)
{
  return strval($num);
}

// 這瞎咪！！！
use function strval as numberToString;