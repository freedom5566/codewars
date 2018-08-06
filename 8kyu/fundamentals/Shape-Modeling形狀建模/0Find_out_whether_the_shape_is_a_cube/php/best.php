<?php
function cubeChecker($volume, $side) {
    return $volume > 0 && $volume == $side ** 3;
}