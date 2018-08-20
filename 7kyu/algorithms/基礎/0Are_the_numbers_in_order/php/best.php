<?php
function in_asc_order($arr) {
    $temp = $arr;
    sort($temp);
    return ($temp == $arr);
}