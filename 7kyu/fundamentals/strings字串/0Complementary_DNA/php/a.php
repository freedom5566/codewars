<?php
function DNA_strand($dna) {
    return strtr($dna, [
      'T' => 'A',
      'A' => 'T',
      'C' => 'G',
      'G' => 'C'
    ]);
}