<?php
function reverseLetter($str){
    return strrev(preg_replace('/[^a-z]/', '', $str));
}