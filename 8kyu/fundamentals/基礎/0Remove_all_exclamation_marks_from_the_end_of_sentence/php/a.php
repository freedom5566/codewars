<?php

function remove(string $s): string {
    return rtrim($s, '!');
  }