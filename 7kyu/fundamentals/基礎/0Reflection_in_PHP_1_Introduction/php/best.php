<?php
function get_info($fn) {
    return [
      ($r = new ReflectionFunction($fn))->getNumberOfParameters(),
      $r->getNumberOfRequiredParameters(),
      $r->hasReturnType(),
      $r->isClosure(),
      $r->isInternal(),
      $r->isUserDefined()
    ];
  }

  // 都忘了這招XDDD