<?php
const BASE_PATH = __DIR__ . '/../';

require BASE_PATH."Core/functions.php";

// dd(BASE_PATH."Core/functions.php");   "/Applications/MAMP/htdocs/Laracast/public/../Core/functions.php"
// require __DIR__."/Core/functions.php"; Applications/MAMP/htdocs/Laracast/public/Core/functions.php

spl_autoload_register(function ($class) {

    // $class = "Core\Database"
    $class = str_replace('\\',DIRECTORY_SEPARATOR,$class);
    require base_path($class.'.php');
});

// require base_path("Core/router.php"); ---- now Router CoRe

// $router = new \Core\Router();
// $routes = require base_path("routes.php");

// $uri = parse_url($_SERVER["REQUEST_URI"])['path'] ;

// $method = $_POST['_method'] ?? $_SERVER['REQUEST_URI'];

// $router->route($uri,$method);



$router = new \Core\Router();
 $routes = require base_path('routes.php');

 $uri = parse_url($_SERVER['REQUEST_URI'])['path'];
 $method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

 $router->route($uri, $method);

// $config = require("config.php"); 



