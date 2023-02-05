<?php 

// return [
//     '/public/' => 'controllers/index.php',
//     '/about' => 'controllers/about.php',
//     '/contact' => 'controllers/contact.php',
//     '/notes' => 'controllers/notes/index.php',
//     '/note' => 'controllers/notes/show.php',
//     '/note/create' => 'controllers/notes/create.php',
    
// ];

$router->get('/public/' , 'controllers/index.php');
$router->get('/about' , 'controllers/about.php');
$router->get('/contact' , 'controllers/contact.php');
$router->get('/notes' , 'controllers/notes/index.php');
$router->get('/note','controllers/notes/show.php');
$router->delete('/note','controllers/notes/destroy.php');
$router->get('/note/create' , 'controllers/notes/create.php');
$router->post('/notes' , 'controllers/notes/store.php');
