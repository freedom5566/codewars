<?php
function baubles_on_tree(int $a, int $b) {
    return $b === 0 ? "Grandma, we will have to buy a Christmas tree first!" : array_map(function ($e) use ($a, $b) {return ~~($a / $b) + ($e < $a % $b + 1 ? 1 : 0);}, range(1, $b));
}

function baubles_on_tree(int $baubles, int $branches) {
    if($branches <= 0) return "Grandma, we will have to buy a Christmas tree first!";
    $sum =  SplFixedArray::fromArray(array_fill(0,$branches,0));
  
    for($i = 0,$len = $sum->count();$i<$len;$i++,$branches--){
    if(0 < $baubles){
      $sum[$i] = ceil($baubles / $branches);
      $baubles-= $sum[$i];
    }
    }
    return $sum->toArray();
  }
  
  
  function baubles_on_tree(int $baubles, int $branches) {
    // Your solution here
    if ($branches < 1)
        die("Grandma, we will have to buy a Christmas tree first!");
    $arr = array(); 
    $arr = array_pad($arr, $branches, 0);
    for ($i = 0; $i < $baubles; $i++)
        $arr[$i % $branches]++;
    return $arr;
  }
  function baubles_on_tree(int $a, int $b) {
    return $b === 0 ? "Grandma, we will have to buy a Christmas tree first!" : array_map(function ($e) use ($a, $b) {return ~~($a / $b) + ($e < $a % $b + 1 ? 1 : 0);}, range(1, $b));
  }
  function baubles_on_tree(int $baubles, int $branches) {
    if (!$branches) {
      return 'Grandma, we will have to buy a Christmas tree first!';
    }
    
    $array = [];
     
    for($i = 0; $i < $branches; $i++) {  
      $array[] = ceil($baubles/$branches);
      $baubles--;
    }
     
    return $array;
  }