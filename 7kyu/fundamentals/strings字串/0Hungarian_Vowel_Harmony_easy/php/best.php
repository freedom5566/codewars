<?php
function dative(string $w): string {
    return (preg_match('[e|é|i|í|ö|ő|ü|ű]', $w)> preg_match('[a|á|o|ó|u|ú]', $w))? $w."nek": $w."nak";
}