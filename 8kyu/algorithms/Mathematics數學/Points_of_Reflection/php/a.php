<?php
function symmetric_point($p, $q) {
    return [$q[0] * 2 -$p[0], $q[1] * 2 -$p[1]];
}