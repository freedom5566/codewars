<?php

function howManyDalmations(int $number) {
  
  $dogs =["Hardly any", "More than a handful!", "Woah that's a lot of dogs!", "101 DALMATIANS!!!"];
  
  if($number<=10) return $dogs[0];
  elseif ($number>=11 && $number<=50) return $dogs[1];
  elseif ($number<101 && $number>=51) return $dogs[2];
  else return $dogs[3];


}