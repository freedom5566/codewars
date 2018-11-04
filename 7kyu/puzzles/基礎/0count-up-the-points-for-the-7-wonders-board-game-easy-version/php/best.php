<?php

function sevenWondersScience($compasses, $gears, $tablets) {
    return min($compasses, $gears, $tablets) * 7 + $compasses ** 2 + $gears ** 2 + $tablets ** 2;
  }