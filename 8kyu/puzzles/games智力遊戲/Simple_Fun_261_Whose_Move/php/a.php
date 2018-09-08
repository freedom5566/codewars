<?php

function whose_move(string $last_player, bool $win): string {
    // Coding and coding ... 
    if($win){
      return $last_player;
    
    } else {
      if($last_player==="black"){
        return "white";
      }  else {
        return "black";
      }
    }
  //   return $win===1 ? "asdf": $last_player === "black" ? "white" : "black";
  
  }