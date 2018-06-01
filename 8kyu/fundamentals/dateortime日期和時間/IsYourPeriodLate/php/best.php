<?php
function periodIsLate($last, $today, $cycleLength) {
    return ($today->diff($last)->days > $cycleLength);
  }