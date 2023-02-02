<?php

require "functions.php";

$uri = parse_url($_SERVER["REQUEST_URI"])['path'] ;
// dd(parse_url(($uri)));

$routes = [
    '/' => 'controllers/index.php',
    '/controllers/about' => 'controllers/about.php',
    '/controllers/contact' => 'controllers/contact.php',
];

if (array_key_exists($uri,$routes)) {
    require $routes[$uri];
}
else {
    http_response_code(404);
    $heading="Error: Page not Found";
    require "views/404.php";
}