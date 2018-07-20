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
  if($nb_petals>0){
    while(true){
      foreach($data as $key => $value){
         $j++;
         if($j===$nb_petals){
           return $value;
           exit;
         }
      }
    }
  }else{
    return "not at all";
  }
}