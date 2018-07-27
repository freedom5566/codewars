<?php

function datingRange(int $n): string {
    return floor(($b = $n <= 14) ? 0.9 * $n : 0.5 * $n + 7) . "-" . floor($b ? 1.1 * $n : 2 * $n - 14);
}