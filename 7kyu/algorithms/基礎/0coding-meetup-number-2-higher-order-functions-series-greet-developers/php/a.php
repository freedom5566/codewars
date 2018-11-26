<?php


function greet_developers($a) {
    foreach($a as $idx => $value){
          $a[$idx]['greeting'] = 'Hi '.$a[$idx]['first_name'].', what do you like the most about '.$a[$idx]['language'].'?';
      }
      return $a;
}
  