<?php
function fuel_price($l, $p) {
    return round($l * max($p - 0.25, $p - 0.05 * ~~($l / 2)), 2);
  }