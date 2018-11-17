<?php
function drink_water($bottle_height, $bottle_radius, $water_height, $crow_mouth, $little_stones) {
    $volume =$bottle_height * ($bottle_radius * $bottle_radius *pi());
      $a = $volume * ($water_height /$bottle_height);
      $b = $volume * ($crow_mouth / $bottle_height);
      $w = ((floor($volume*100)-floor($a*100)-floor($b*100))/100);
      $data =[];
      if ((int)$w === 0) return [];
      foreach($little_stones as $value){
          if($w <0) {
              break 1;
          }
          $data[] = $value;
          $w =(floor($w*100)/100) -$value;
      }
      return $w>0?"The crow is dead.":$data;
}
function drink_water($bottle_height, $bottle_radius, $water_height, $crow_mouth, $little_stones) {
    $remaining_volume = ($bottle_height - $water_height - $crow_mouth) * M_PI * $bottle_radius ** 2;
    $result = [];
    while ($remaining_volume > 0 && count($little_stones) > 0) {
      array_push($result, $stone = array_shift($little_stones));
      $remaining_volume -= $stone;
    }
    return $remaining_volume > 0 ? 'The crow is dead.' : $result;
}
function drink_water($bottle_height, $bottle_radius, $water_height, $crow_mouth, $little_stones) {
    $res = [];
    while ($crow_mouth < $bottle_height - $water_height) {
      $stone = array_shift($little_stones);
      if (!$stone) return 'The crow is dead.';
      $water_height += $stone / (M_PI * $bottle_radius ** 2);
      $res[] = $stone;
    }
    return $res;
}
function drink_water($bh, $br, $wh, $cm, $ls, $i = 0) {
    return $i>count($ls) ? 'The crow is dead.' : (array_sum(array_slice($ls,0,$i))/M_PI/$br**2>=$bh-$wh-$cm ? array_slice($ls,0,$i) : drink_water($bh,$br,$wh,$cm,$ls,++$i));
}
  
  