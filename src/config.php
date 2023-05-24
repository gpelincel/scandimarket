<?php

define("ROOT", "http://localhost/projects/Scandimarket");
define("CSS", "views/css/");
define("JS", "views/js/");
define("IMG", "views/img/");

define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);


function url(string $uri = null){
    if ($uri) {
        return ROOT . "{$uri}";
    }

    return ROOT;
}