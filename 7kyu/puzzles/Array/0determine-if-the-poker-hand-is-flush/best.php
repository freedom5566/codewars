<?php
function checkIfFlush($cards)
{
    $suit = substr($cards[0], -1);
    return substr_count(implode($cards), $suit) === 5;
}
function checkIfFlush($cards)
{
  foreach ($cards as &$value) {
    $value = ltrim($value, '0123456789JQKA');
  }
  return 1==count(array_unique($cards));
}

function checkIfFlush($cards)
{
  return preg_match("/(H|S|D|C)(\g{1}){4}/", preg_replace("/[^HSDC]/", "", join("", $cards))) === 1;
}