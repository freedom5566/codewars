<?php
// 大哥不累嗎

function scale($s, $k, $n) {  
    return empty($s)?'':implode(PHP_EOL,array_map(function($v) use ($k,$n){
      return implode(PHP_EOL, array_fill(0,$n,implode(array_map(function($c) use($k){
        return implode(array_fill(0,$k,$c));
      },str_split($v)))));
    },explode(PHP_EOL,$s)));
}

// 正規表達就是贊

function scale($s, $k, $n) {
    $s = preg_replace( '/[^\n]/',  str_repeat('$0', $k), "$s\n" );
    $s = preg_replace( '/(\w*\n)/', str_repeat('$1', $n), $s );
    
    return trim($s);
}

//

function scale($s, $k, $n) {
    $lines = explode(PHP_EOL, $s);
    $result = '';
    foreach($lines as $line) {
      $hScaleString = '';
      for($i = 0; $i < strlen($line); $i++) {
         $hScaleString .= str_repeat($line[$i], $k);
      }
      $result .= str_repeat($hScaleString . PHP_EOL, $n);
    }
    
    return $s ? trim($result) : '';
}
// 我的答案
function scale($s, $k, $n) {
    if($s ==='') return '';
    $arr = explode("\n",$s);
      $list = array_map(function($n) use ($k){
          $str ='';
          $a = str_split($n);
          for($j = 0;$j<count($a);$j++){
              for($i = 0;$i<$k;$i++){
                  $str .=$a[$j];
              }
          }
          return $str;
      },$arr);
      return substr(implode(array_map(function($k) use ($n){
          return str_repeat($k."\n",$n);
      },$list)),0,-1);
  }