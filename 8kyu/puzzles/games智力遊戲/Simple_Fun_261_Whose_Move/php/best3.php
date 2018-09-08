<?php
function whose_move(string $last_player, bool $win): string {
    if ($last_player == "white"){
      return $win ? "white" : "black";
    }
    else
    return $win ? "black" : "white";
  }