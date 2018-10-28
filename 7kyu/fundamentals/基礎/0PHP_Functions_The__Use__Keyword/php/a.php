<?php
function multiple_closures($a) {
    return function ($b, $c) use ($a) {
      return function ($d, $e) use ($a, $b, $c) {
        return $a + $b * $c - $d / $e;
      };
    };
  }

  function multiple_closures($a): callable {
    return function($b, $c) use ($a): callable {
      return function($d, $e) use ($a, $b, $c): float {
        return $a + $b * $c - $d / $e;
      }; 
    };
  }