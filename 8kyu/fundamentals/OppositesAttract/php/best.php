<?php
function lovefunc(int $flower1, int $flower2) : bool {
    return ($flower1 % 2 !== $flower2 % 2);
}