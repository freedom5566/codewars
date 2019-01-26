<?php

// 這題不錯哦，我想到要用 array_column 卻沒有想到接著用 array_search
function get_first_python($a) {
    $key = array_search('Python',array_column($a, 'language'));
    
    return ($key === false) ? 'There will be no Python developers' : $a[$key]['first_name'].', '.$a[$key]['country'];
}


// 這解法讓我稍微認識了 array_filter 了些

function get_first_python($a) {
    $devs = array_values(array_filter($a, function($dev){return $dev['language']=='Python';}));
      return $devs ? $devs[0]['first_name'].', '.$devs[0]['country'] : 'There will be no Python developers';
}

// 我的解法

function get_first_python($a) {
    $ss = array_column($a,'language');
    foreach($ss as $key => $value){
      if('Python' === $value) {
          return $a[$key]['first_name'].', '.$a[$key]['country'];
          
      }
    }
    return 'There will be no Python developers';
    
}
  