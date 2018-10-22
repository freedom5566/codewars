<?php
function remove(string $s): string {
    return str_replace('!','',$s).str_repeat('!',strlen($s)-strlen(chop($s,'!')));
  }