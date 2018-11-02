<?php
function count_languages($a) {
    return array_count_values(array_column($a,"language"));
 }