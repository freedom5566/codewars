<?php
function price($start, $soil, $age) {
    $soils = [
      'Barely used' => 1.1,
      'Seen a few high kicks' => 1.25,
      'Blood stained' => 1.3,
      'Heavily soiled' => 1.5
    ];
    if (!(is_numeric($start) && is_string($soil) && is_numeric($age) && array_key_exists($soil, $soils))) 
      return "Chuck is bottomless!";
    return '$' . number_format($start * $soils[$soil] ** $age, 2, '.', '');
}
function price($start, $soil, $age) {

    if(is_string($start)) return 'Chuck is bottomless!';
    if(is_string($soil) ===false) return 'Chuck is bottomless!';
    if(is_int($age) ===false) return 'Chuck is bottomless!';
    // 百分比
    $data = array(
      'Barely used' => 10,
      'Seen a few high kicks' =>25,
      'Blood stained' =>30,
      'Heavily soiled' =>50
    );
    if (isset($data[$soil]) ===false) return 'Chuck is bottomless!';
    
    for($i =0;$i<$age;$i++){
      $start += $start*($data[$soil] /100);
    }
    return sprintf("$%.2f",$start);
}
function price($start, $soil, $age) {
    $a = ['Barely used' => 10, 'Seen a few high kicks' => 25, 'Blood stained' => 30, 'Heavily soiled' => 50];
    if (!is_numeric($start) || !is_string($soil) || !is_numeric($age) || !array_key_exists($soil, $a)) return 'Chuck is bottomless!';
    $s = $a[$soil];
    for ($i=0; $i<$age; $i++) {
      $start *= (1 + $s/100);
    }
    if ($start == 0) return '$0.00';
    return '$'.str_pad(round($start, 2), strpos($start, '.') + 3, '0');
}
function price($start, $soil, $age) {
    $soil_input = ['Barely used' => 0.1, 'Seen a few high kicks' => 0.25, 'Blood stained' => 0.3, 'Heavily soiled' => 0.5];
    if (!is_numeric($start) or !is_string($soil) or !array_key_exists($soil, $soil_input) or !is_numeric($age)) return 'Chuck is bottomless!';
    for ($i= 0; $i < $age; $i++) {
     $start += $start * $soil_input[$soil];
    }
    return '$' . number_format($start, 2, '.', '');
}
function price($start, $soil, $age) 
{
    $usage = [
        'Barely used'           => 10,
        'Seen a few high kicks' => 25,
        'Blood stained'         => 30,
        'Heavily soiled'        => 50
    ];
    if(!is_numeric($start) || !is_string($soil) || empty($usage[$soil]) || !is_numeric($age)) { return  'Chuck is bottomless!';}
    return "$" . number_format($start * pow((1 + $usage[$soil]/100), $age), 2, '.', '');
}