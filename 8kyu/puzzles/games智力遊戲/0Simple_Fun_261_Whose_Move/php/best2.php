<?php
function whose_move(string $player, bool $win): string {
    $players = ["black", "white"];
    return $win ? $player : array_reverse($players)[array_search($player, $players)];
}