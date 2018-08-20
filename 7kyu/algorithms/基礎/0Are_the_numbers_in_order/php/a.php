<?php
function in_asc_order($arr) {
    $tmp=$arr[0];
    foreach($arr as $num){

        // 要考慮下一個數字如果跟前個數字是相等的，這樣也是有排序
        if ($num >= $tmp) {
            $tmp = $num;
        } else {
            return false;
        } 
    }
    return true;
  }