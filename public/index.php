<?php
/**
 * Project: lpodev-web
 * Title: index.php
 * Author: LPOdev
 * Version: 1.0 from the 13th September 2022
 */

session_start();

define("BASE_DIR", dirname(__FILE__) . '/..');
const SOURCE_DIR = BASE_DIR . '/src';

$bag = [];

$route = $_SERVER["REQUEST_URI"];
if (!empty($_SERVER["QUERY_STRING"])) {
    $route = substr($route, 0, strlen($_SERVER["REQUEST_URI"])-strlen($_SERVER["QUERY_STRING"])-1);
}

$bag['route'] = $route;
$bag['method'] = $_SERVER['REQUEST_METHOD'];

error_log("index(): ".$bag['method']." ".$bag['route']);

require SOURCE_DIR.'/dispatcher.php';
$bag = dispatch($bag);


require SOURCE_DIR.'/handler.php';
$bag = handle($bag);


require SOURCE_DIR.'/renderer.php';
render($bag);