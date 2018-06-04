<?php
function fuel_price($litres, $price_per_liter) {
    $discount = floor($litres/2) * 0.05;
    if($discount > .25) $discount = 0.25;
    return $litres * ($price_per_liter - $discount);
  }