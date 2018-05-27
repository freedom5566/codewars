<?php

function checkAlive(int $health):bool {
    if ($health>0) {
        
        return true;
    } else  {
        return false;
    }
}