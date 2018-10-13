<?php
function get_info($fn)
{
    $multiply = new ReflectionFunction($fn);
    return [
        $multiply->getNumberOfParameters(),
        $multiply->getNumberOfRequiredParameters(),
        $multiply->hasReturnType(),
        $multiply->isClosure(),
        $multiply->isInternal(),
        $multiply->isUserDefined()
    ];
}