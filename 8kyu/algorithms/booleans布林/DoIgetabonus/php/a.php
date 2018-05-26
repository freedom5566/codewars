<?php

function bonusTime($salary, $bonus) {
    // your code here
    return $bonus?"$".intval($salary)*10:"$".intval($salary);
}