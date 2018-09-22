<?php

function DNA_strand($dna) {
    return strtr($dna, 'ACGT', 'TGCA');
}