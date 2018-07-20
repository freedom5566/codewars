<?php

function how_much_i_love_you(int $nb_petals): string {
    $res = array("not at all", "I love you", "a little", "a lot", "passionately", "madly");
    return $res[fmod($nb_petals,6)];
}