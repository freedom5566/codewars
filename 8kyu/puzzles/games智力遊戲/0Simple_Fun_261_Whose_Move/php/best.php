<?php
function whose_move(string $last_player, bool $win): string {
    if ($win) {
      return $last_player;
    }
    
    return ($last_player == 'white') ? 'black' : 'white';
  }