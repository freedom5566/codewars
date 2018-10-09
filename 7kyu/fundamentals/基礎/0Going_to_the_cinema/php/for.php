<?php
function movie($card, $ticket, $perc) {
    for ($i = 1; true; $i++) {
        if (ceil($card + ($ticket * $perc) * (1 - pow($perc, $i)) / (1 - $perc)) < $ticket * $i)
            return $i;
    }
}