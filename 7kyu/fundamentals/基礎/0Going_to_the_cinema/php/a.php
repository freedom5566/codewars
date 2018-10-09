<?php
function movie($card, $ticket, $perc) {
    // your code
    $day = 0;
    $number = $ticket;
    $a =0;
    $b =$card;
    while(true){
      $day++;
      $a+=$ticket;
      $number *= $perc;
      $b =$b+ $number ;
      if($a>round($b)){
      
        break;
      }
    }
    return $day;
}