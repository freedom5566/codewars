<?php
function datingRange($age)
{
  return $age <= 14 ? floor($age * 0.9) .'-' .floor($age * 1.1) : floor($age / 2 + 7) .'-' .floor(($age - 7) * 2);
}