<?php

// 聰明！！巧妙運用了 explode 
function strCount($str, $letter) {
    
    return count(explode($letter, $str))-1;
}

// 我的寫法
function strCount($s, $l) {
    return substr_count($s, $l);
}