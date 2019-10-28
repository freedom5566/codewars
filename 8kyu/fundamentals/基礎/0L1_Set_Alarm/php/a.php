<?php

function setAlarm(bool $employed, bool $vacation): bool {
    return $employed && !$vacation;
}


function setAlarm(bool $e, bool $v): bool {
    if ($e === true && $v === false) {
      return true;
    }
    return false;
}