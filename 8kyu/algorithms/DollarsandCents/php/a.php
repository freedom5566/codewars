<?php

function format_money(float $amount): string {
    return sprintf('$%.2f', $amount);
}