<?php
function vertMirror($s) {
    $data=array();
    foreach (explode("\n",$s) as $key => $value){
      $data[$key] =strrev($value);
    }
    return implode("\n",$data);
}
function horMirror($s) {
    return   implode("\n",array_reverse(explode("\n",$s)));
}
function oper($fct, $s) {
    if('vertMirror'===$fct) return vertMirror($s);
    if('horMirror' === $fct) return horMirror($s);
}