<?php
function vertMirror($grid) {
  return array_map('strrev', $grid);

}
function horMirror($grid) {
  return array_reverse($grid);
}
function oper($fct, $s) {
  return implode("\n", $fct(explode("\n", $s)));
}