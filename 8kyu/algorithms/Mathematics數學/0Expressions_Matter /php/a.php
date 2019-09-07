<?php

function expressionMatter($a, $b, $c) {
    return max([
        $a+$b+$c,
        ($a+$b)*$c,
        $a*($b+$c),
        $a+$b*$c,
        $a*$b+$c,
        $a*$b*$c
    ]);
}

function expressionMatter($a, $b, $c) {
    $max = 0;
    $op = array(true,false);
    $values = array(0);
    for ($i = 0; $i < count($op); $i++) {
      for($j = 0; $j < count($op); $j++) {
        if ($i != $j) {
          $tmp = resultOf($op[$j],$b,$c);
          array_push($values,resultOf($op[$i],$tmp,$a));
       }
       $tmp = resultOf($op[$i],$a,$b);
       array_push($values,resultOf($op[$j],$tmp,$c));
      }
    }
    return max($values);
  }
  
  function resultOf($operation,$lvalue,$rvalue){
    return $operation ? $lvalue*$rvalue : $lvalue+$rvalue;
  }

  function expressionMatter($a, $b, $c)
  {
      $numbers = [
          $a,
          $b,
          $c
      ];
      switch (array_count_values($numbers)['1']) {
          case 0:
              return $a * $b * $c;
              break;
          case 1:
              if ($a == 1) {
                  return ($a + $b) * $c;
                  break;
              } elseif ($c == 1) {
                  return $a * ($b + $c);
                  break;
              } else {
                  return $a <= $c ? ($a + $b) * $c : $a * ($b + $c);
                  break;
              }
          case 2:
              if ($a == 1 && $c == 1) {
                  return $a + $b + $c;
                  break;
              } elseif ($a == 1 && $b == 1) {
                  return ($a + $b) * $c;
                  break;
              } else {
                  return $a * ($b + $c);
                  break;
              }
  
          default:
              return $a + $b + $c;
              break;
      }
  }