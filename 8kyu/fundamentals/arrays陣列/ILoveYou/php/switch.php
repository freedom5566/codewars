<?php
function how_much_i_love_you(int $nb_petals): string {
    $number = ($nb_petals-1) % 6;
    switch($number){
      case 0:
        return "I love you";
      case 1:
        return "a little";
      case 2:
        return "a lot";
      case 3:
        return "passionately";
      case 4:
        return "madly";
      case 5:
        return "not at all";
    }
  }