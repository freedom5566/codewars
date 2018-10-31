<?php
function is_ruby_coming($a) {
    // Thank you for checking out my Kata :D
    return in_array('Ruby',array_column($a,'language'));
  }

function is_ruby_coming($a) {
    return 0 < count(array_filter($a, function ($dev) { return $dev['language'] === 'Ruby'; }));
}