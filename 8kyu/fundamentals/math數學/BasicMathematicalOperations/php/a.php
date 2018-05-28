<?php

function basicOp($op, $val1, $val2)
{
  switch($op){
    case '+':
      return $val1+$val2;
      break;
    case '-':
      return $val1-$val2;
      break;
    case '*':
      return $val1*$val2;
      break;
    case '/':
      return $val1/$val2;
      break;
    
  
  }
}