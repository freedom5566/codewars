<?php

function pipeFix($numbers) {
  return range(min($numbers), max($numbers));
}