<?php

function centuryFromYear($year)
{
  // Your code here
  return ($year%100==0)?floor($year / 100) : floor($year / 100 + 1);
}