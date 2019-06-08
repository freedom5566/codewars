<?php
//best
function encode(string $s): string {
    return preg_replace_callback('/[a-z]/i', function ($m) {return (ord($m[0]) + 1) % 2;}, $s);
}

// 我的解答

function encode(string $s): string {
    $list = array_combine(range('a','z'),range(0,25));
    return implode(array_map(function($a) use($list) {
      if(array_key_exists($a,$list)){
          return $list[$a]%2 ===0?0:1;
      } else{
          return $a;
      }
    },str_split(strtolower($s))));
}
// 位元運算！
function encode(string $s): string {
    $list = range('a','z');
    return join(array_map(function($char) use($list){ 
        if(($pos = array_search(strtolower($char),$list)) !== false){
          return $pos & 1;
        }
        return $char;
    },str_split($s)));
    
}
  