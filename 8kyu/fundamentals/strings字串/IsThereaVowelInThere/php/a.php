<?php
function isVow(array $a)
{
     

    for($i=0;$i<count($a);$i++){
      if($a[$i]===101) $a[$i]="e";
      elseif($a[$i]===97) $a[$i]="a";
      elseif($a[$i]===105) $a[$i]="i";
      elseif($a[$i]===111) $a[$i]="o";
      elseif($a[$i]===117) $a[$i]="u";
    }
    return $a;
}