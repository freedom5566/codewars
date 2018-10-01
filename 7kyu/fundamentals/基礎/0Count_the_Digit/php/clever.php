<?php
function nbDig($n, $d) {
    $string = "";
    for ($x=0; $x <= $n; $string .= ($x++)**2);
    return substr_count($string,$d);
  }