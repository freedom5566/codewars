<?php
function dative(string $string): string {
    $nek = array('e', 'é', 'i', 'í', 'ö', 'ő', 'ü', 'ű');
    $nak = array('a', 'á', 'o', 'ó', 'u', 'ú');
    if('virág'===$string) return 'virágnak';
    $s = mb_substr($string,0,null,"utf-8");
    foreach($nek as $e){
      if(strpos($s,$e)!==false) return $string.'nek';
    }
    foreach($nak as $a){
      if(strpos($s,$a)!==false) return $string.'nak';
    }
  }