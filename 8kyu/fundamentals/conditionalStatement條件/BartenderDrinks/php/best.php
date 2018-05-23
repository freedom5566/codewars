<?php

function get_drink_by_profession(string $s): string {
    return [ 
    "jabroni" =>"Patron Tequila",
    "school counselor"=>"Anything with Alcohol",  
    "programmer"=>"Hipster Craft Beer",
    "bike gang member"=>"Moonshine",
    "politician"=>"Your tax dollars",
    "rapper"=>"Cristal"
    ][strtolower($s)]??"Beer";
}