<?php

// 遞迴
function stringify($list): string {
    return is_null($list) ? "NULL" : "{$list->data} -> " . stringify($list->next);
}

function stringify($list): string {
    $result = [];
    while ($list) {
        $result[] = $list->data;
        $list = $list->next;
    }
    
    $result[] = "NULL";
    return implode(' -> ', $result);
}

// 我的答案

function stringify($list): string {
    $str=[];
    while($list){
      $str[]=$list->data;
      $list=$list->next;
    }
    return $str?implode(' -> ',$str).' -> NULL':'NULL';
}