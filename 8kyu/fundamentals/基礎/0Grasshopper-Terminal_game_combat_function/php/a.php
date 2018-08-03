<?php
function combat($health, $damage) {
  # Good luck
  return $health-$damage>0?$health-$damage:0;
}