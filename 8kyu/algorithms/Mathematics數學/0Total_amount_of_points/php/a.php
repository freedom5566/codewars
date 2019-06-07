<?php

function points(array $games): int {
  return array_sum(array_map(function($n){
  
    list($x, $y) = explode(':',$n);
    if($x > $y) return 3;
    if($x < $y) return 0;
    if($x === $y) return 1;
    
  
  }, 
  $games));
}

function points( array $games ): int {
    return array_sum( array_map( function( $g ) { return $g[0] != $g[strlen($g)-1] ? $g[0] > $g[strlen($g)-1] ? 3 : 0 : 1; }, $games ) );
}