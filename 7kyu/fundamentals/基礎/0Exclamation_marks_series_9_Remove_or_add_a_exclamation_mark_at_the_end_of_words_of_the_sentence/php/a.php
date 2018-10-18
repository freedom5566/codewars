<?php
function remove(string $s): string {
    $data = explode(" ",$s);
    $arr = array();
    foreach($data as $value){
      if($value[strlen($value)-1] ==='!' && substr($value,-2) ==='!!'){
        if($value[0]==='!'){
          $arr[]=substr($value,0,strlen($value));
          
        } else {
          $arr[] =$value;
        }
      } elseif($value[strlen($value)-1] ==='!') {
        $arr[] = rtrim($value,'!');
      } else {
        $arr[] = $value.'!';
      }
      
      
    }
    return implode(" ",$arr);
  }