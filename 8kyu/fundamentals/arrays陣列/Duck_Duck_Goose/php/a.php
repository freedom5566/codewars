<?php

function duck_duck_goose($players, $goose) {
    return $players[($goose-1) % count($players)]['name'];
}