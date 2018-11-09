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
    
    
    