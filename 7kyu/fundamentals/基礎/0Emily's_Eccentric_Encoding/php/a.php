<?php
function decode($string){
    return strtr($string,array_combine(range('a','z'),range('z','a')));
  }