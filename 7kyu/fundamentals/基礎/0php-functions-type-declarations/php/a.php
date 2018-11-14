<?php

function multiply(int $a, int $b)
{
  return $a * $b;
}

function get_profile(Person $person)
{
  return 
    "Name: {$person->name}".PHP_EOL.
    "Age: {$person->age}".PHP_EOL.
    "Gender: {$person->gender}".PHP_EOL.
    "Occupation: {$person->occupation}";
}