<?php
function how_much_i_love_you(int $nb_petals): string {
    // Your code here
    $data=[
      1=>"I love you",
      2=>"a little",
      3=>"a lot",
      4=>"passionately",
      5=>"madly",
      6=>"not at all"
    ];
    
    $j=0;
    for($i=1;$i<($nb_petals+1);$i++){
      $j++;
      if($i===7) {
        $i=1;
       } 
      if($j===$nb_petals) {
        return $data[$i];
        exit;
      }
     
    }
  }