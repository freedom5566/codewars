<?php
//best
function which_bus_to_take(array $buses_colors, array $going_to_school): int {
    $going = array_filter($going_to_school);
    $r = null;
    foreach ($going as $i => $g) {
      if ($buses_colors[$i] == 'red') return $i;
      else if ($r == null) $r = $i;
    }
    return $r;
}
// 我的答案