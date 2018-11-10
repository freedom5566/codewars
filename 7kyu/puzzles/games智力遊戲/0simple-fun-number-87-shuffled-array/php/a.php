<?php
function shuffledArray($arr){

    $sum = array_sum($arr);
        $list = array();
        $bo =true;
        foreach($arr as $key => $value){
            if($bo){
                if($sum-$value === $value){
                    unset($arr[$key]);
                    $bo =false;
                } else {
                    $list[] =$value;
                }
                
            } else {
                $list[]=$value;
            }
        }
        sort($list);
        return $list;
    
}
    
function shuffledArray($arr){
    
    
    
    
    unset($arr[array_search(array_sum($arr)/2, $arr)]);
    
    
    sort($arr);
    
    
    return $arr;
    
    
}
    
function shuffledArray($arr){
    sort($arr);
    array_splice($arr, array_search(array_sum($arr)/2, $arr), 1);
    return $arr;
  }
  function shuffledArray(array $a): array {
    for ($i = 0; $i < count($a); $i++) if ($a[$i] === array_sum($b = array_filter($a, function ($e, $j) use ($i) {return $j !== $i;}, ARRAY_FILTER_USE_BOTH))) {
      sort($b);
      return $b;
    }
  }