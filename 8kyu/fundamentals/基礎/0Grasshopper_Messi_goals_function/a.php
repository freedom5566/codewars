<?php
function goals(int ...$args): int {
    return array_sum($args);
}


function goals (int $laLigaGoals, int $copaDelReyGoals, int $championsLeagueGoals) : int {
    return $result = $laLigaGoals + $copaDelReyGoals + $championsLeagueGoals;
}