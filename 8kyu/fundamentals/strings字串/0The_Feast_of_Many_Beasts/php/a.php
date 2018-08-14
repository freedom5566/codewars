<?php
function feast($beast, $dish){
    return substr($beast, 0, 1) === substr($dish, 0, 1) && substr($beast, -1) === substr($dish, -1);
}