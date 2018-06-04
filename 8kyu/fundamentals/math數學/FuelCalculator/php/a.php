<?php

function fuel_price($litres, $price_per_liter) {
    // your code here
    // Good luck with it!
    $per=[2=>0.05,4=>0.10,6=>0.15,8=>0.20,10=>0.25];
    if($litres>=2 && $litres<4) return (float) number_format($litres*$price_per_liter - ($litres*(float)$per[2]),2);
    elseif($litres>=4 && $litres<6) return (float) number_format($litres*$price_per_liter - ($litres*(float)$per[4]),2);
    elseif($litres>=6 && $litres<8) return (float) number_format($litres*$price_per_liter - ($litres*(float)$per[6]),2);
    elseif($litres>=8 && $litres<10) return (float) number_format(($litres*$price_per_liter) - ($litres*$per[8]),2);
    elseif($litres>=10) return (float) number_format((float)$litres*(float)$price_per_liter - ((float)$litres*(float)$per[10]),2);
    elseif($litres<2&&$litres>0) return (float) number_format((float)($litres*$price_per_liter),2);
    else return (float) number_format((float)($litres*$price_per_liter),2);
  
  //   return 
  }