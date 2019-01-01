<?php
function multiply_all($arr)
{
  return function($a) use ($arr){
	return array_map(function($n) use ($a){
		return $n*$a;
	},$arr);
  };
}

