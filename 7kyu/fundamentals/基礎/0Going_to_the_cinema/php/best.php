<?php

function movie($card, $ticket, $perc) {
    $need = 0;
    do {
        $need++;
        $card += $ticket * ($perc ** $need);
    } while (ceil($card) >= ($ticket * $need));   
    return $need;
}