<?php
function cubeChecker($volume, $side){

    return (pow($side,3) === $volume && $side >0) ? true : false;
}