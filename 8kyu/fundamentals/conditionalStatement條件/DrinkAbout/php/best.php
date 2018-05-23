<?php

function people_with_age_drink(int $n): string {
  return 'drink ' . ($n < 21 ? $n < 18 ? $n < 14 ? 'toddy' : 'coke' : 'beer' : 'whisky');
}