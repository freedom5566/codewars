<?php
function reverseLetter($str){
    return strrev(preg_replace('/[^A-Za-z]/','',$str));
}