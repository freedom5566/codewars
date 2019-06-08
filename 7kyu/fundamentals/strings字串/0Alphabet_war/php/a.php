<?php
// best

function getScore($l) {
    $thisIsWar = array('w'=>4, 'p'=>3, 'b'=>2, 's'=>1, 'm'=>-4, 'q'=>-3, 'd'=>-2, 'z'=>-1);
    return array_key_exists($l, $thisIsWar) ? $thisIsWar[$l] : 0;
  }
  
function alphabetWar($fight) {
    $result = array_sum(array_map(getScore, str_split($fight)));
    if ($result < 0) { return "Right side wins!"; }
    return $result > 0 ?  "Left side wins!" : "Let's fight again!";
}

// clever

function alphabetWar($fight) {
    $right_side = array_sum(str_split(strtr($fight,["m"=>4, "q"=>3, "d"=>2, "z"=>1])));
    $left_side = array_sum(str_split(strtr($fight, ["w"=>4, "p"=>3, "b"=>2, "s"=>1])));
    
    return ($right_side > $left_side) ? "Right side wins!" : ($left_side > $right_side ? "Left side wins!" : "Let's fight again!");
}

// 我的答案

function alphabetWar($fight)
{
  $leftlist = ['w'=>4,'p'=>3,'b'=>2,'s'=>1];
  $rightlist = ['m'=>4,'q'=>3,'d'=>2,'z'=>1];
  $r = 0;
  $l = 0;
  $figs = str_split($fight);
  foreach($figs as $str){
    if(isset($leftlist[$str])){
        $l += $leftlist[$str];
    }
    if(isset($rightlist[$str])){
        $r += $rightlist[$str];
    }
  }
  if($r > $l) return 'Right side wins!';
  if($r < $l) return 'Left side wins!';

  return 'Let\'s fight again!';
}
