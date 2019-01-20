<?php
function sum_all(int ...$i):int
{
  return array_sum($i);
}
function ultimate_product(int ...$i)
{
  return array_product($i);
}
function scale_sum(int $i,int ...$j):int
{
  return $i*array_sum($j);
}

