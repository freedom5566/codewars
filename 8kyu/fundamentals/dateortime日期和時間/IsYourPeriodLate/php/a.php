<?php
function periodIsLate($last, $today, $cycleLength) {
        return abs(strtotime(date_format($today,"Y-m-d"))-strtotime(date_format($last,"Y-m-d")))/86400<=$cycleLength?false:true;
}