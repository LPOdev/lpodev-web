<?php
/**
 * Project: lpodev-web
 * Title: dispatcher.php
 * Author: LPOdev
 * Version: 1.0 from the 13th 09 2022
 */

function dispatch($bag)
{
    $matches = [];

    //-----------------------------------------------------------------------------
    if (preg_match('/^\/?$/', $bag['route'])) {
        $bag['view'] = 'views/site/index';
    } //-----------------------------------------------------------------------------
    elseif (preg_match('/^\/exercises$/', $bag['route'], $matches)) {
        $bag['handler'] = 'controllers/exercises/index';
    } //-----------------------------------------------------------------------------
    else {
        $bag['status_code'] = 404;
    }

    return $bag;
}

//=============================================================================
// Return the URL for the given named route (the opposite of the dispatcher)
function route($name)
{
    return '/' . $name;
}