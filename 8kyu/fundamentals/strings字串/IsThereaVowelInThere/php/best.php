<?php

function isVow(array $a)
{
    return str_replace(['97', '101', '105', '111', '117'], ['a', 'e', 'i', 'o', 'u'], $a);
}