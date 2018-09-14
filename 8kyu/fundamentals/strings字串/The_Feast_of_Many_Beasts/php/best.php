<?php

function feast($beast, $dish) {
    return (($beast[0] === $dish[0]) && ($beast[strlen($beast) - 1] === $dish[strlen($dish) - 1]));
}