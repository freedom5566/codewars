<?php
function evaporator( $content, $evap_per_day, $threshold ): int {
  return 1 + floor(log( $threshold / 100 ) / log( ( 100 - $evap_per_day ) / 100 ));
}