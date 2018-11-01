<?php
function checkIfFlush($cards)
{
  $data = array_map(function($n){
    return substr($n,-1);
  },$cards);
  
  return count(array_unique($data)) === 1;
}
