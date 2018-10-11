<?php
function index_of($head, $value) {
    $day=0;
    while($head){
      if($head->data === $value){
        return $day;
      }
      $day++;
      $head = $head->next;
    }
    return -1;
    
  }