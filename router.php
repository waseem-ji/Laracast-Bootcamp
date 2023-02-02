<?php 
$uri = parse_url($_SERVER["REQUEST_URI"])['path'] ;
// dd(parse_url(($uri)));

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
    '/notes' => 'controllers/notes.php',
    '/note' => 'controllers/single-note.php',
];

if (array_key_exists($uri,$routes)) {
    require $routes[$uri];
}
else {
    http_response_code(404);
    $heading="Error: Page not Found";
    require "views/404.php";
}