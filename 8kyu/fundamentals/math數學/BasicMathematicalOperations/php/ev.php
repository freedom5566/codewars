<?php

function basicOp($op, $val1, $val2)
{
  // this makes me feel dirty, but it gets the job done
  return eval("return {$val1}{$op}{$val2};");
}