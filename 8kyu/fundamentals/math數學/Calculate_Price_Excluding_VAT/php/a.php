<?php
function excludingVatPrice($price){
    return $price === null ? -1 : round($price / 1.15, 2);
}