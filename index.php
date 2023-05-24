<?php

require __DIR__."/vendor/autoload.php";

use CoffeeCode\Router\Router;

$route = new Router(ROOT);

/**
 * APP
 */
$route->namespace("Source\App");

/**
 * web
 */
$route->group(null);
$route->get("/", "Web:home");

$route->group("addproduct");
$route->get("/", "Web:addproduct");

/**
 * ERROR
 */
$route->group("error");
$route->get("/{errcode}", "Web:error");

/**
 * PROCESS
 */
$route->dispatch();

if ($route->error()) {
    $route->redirect("/error/{$route->error()}");
}