<?php
function sevenWondersScience($compasses, $gears, $tablets){
    $tmpcompasses= $compasses;
    $tmpgears = $gears;
    $tmptablets = $tablets;
    
    $num =0;
    while(true){
      if($compasses === 0 || $gears === 0 || $tablets === 0){
        break;
      }
      if($compasses >=1 && $gears >=1 && $tablets>=1){
        $num+=7;
      }
      $compasses-=1;
      $gears-=1;
      $tablets-=1;
    }
      
    $num+=pow($tmpcompasses,2);
    $num+=pow($tmpgears,2);
    $num+=pow($tmptablets,2);
    return $num;
  }