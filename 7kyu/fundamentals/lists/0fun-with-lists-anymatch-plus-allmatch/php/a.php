<?php

// clever 遞迴解也太漂亮......
function any_match($h, $f) {
    return is_null($h) ? false : ($f($h->data) ? true : any_match($h->next, $f));
}
function all_match($h, $f) {
    return is_null($h) ? true : ($f($h->data) ? all_match($h->next, $f) : false);
}

function any_match($head, $p) {
  
    $list = [];
    while($head){
      if($p($head->data)) {
        $list[] = true;
      }
      else $list[]= false;
      $head = $head->next;
    }
  
    return count(array_filter($list))>=1;
  }
  function all_match($head, $p) {
    $list = [];
    while($head){
      if($p($head->data)) $list[] = true;
      else $list[]= false;
      $head = $head->next;
    }
    $len = count($list);
    return $len === count(array_filter($list))?true:false;
}