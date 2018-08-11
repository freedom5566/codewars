<?php

function whose_move(string $last_player, bool $win): string {
    return $win ? $last_player : ['black' => 'white', 'white' => 'black'][$last_player];
}