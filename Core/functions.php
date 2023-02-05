<?php
use Core\Response;
function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}
function abort($code = 404)
     {
         http_response_code($code);

         require base_path("views/{$code}.php");

         die();
     }
function isUri($value) {
    return $_SERVER["REQUEST_URI"] === $value;
}

function authorize($conditon,$status=Response::FORBIDDEN) {
    if(!$conditon) {
        abort($status);
    }
}

function base_path($path) {
   
    // dd(BASE_PATH); string(45) "/Applications/MAMP/htdocs/Laracast/public/../"
    // dd(__DIR__); string(39) "/Applications/MAMP/htdocs/Laracast/Core"

    //-------------      FIX THE PATH    --------------------
    // dd(dirname(__DIR__));
    // return (__DIR__.$value);
    return BASE_PATH.$path;

}
function view($path,$attributes=[]) {
    extract($attributes);
    require base_path('views/' . $path);
}