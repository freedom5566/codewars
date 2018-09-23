<?php
function vertMirror($s) {
    return implode(PHP_EOL,array_map('strrev', explode(PHP_EOL,$s)));
  }
  function horMirror($s) {
    return implode(PHP_EOL,array_reverse(explode(PHP_EOL,$s)));
  }
  function oper($f, $s) {
    if (is_callable($f)) return $f($s);
}