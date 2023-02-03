<?php

function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
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

function base_path($value) {
   
    // dd(__DIR__.'/'.$value);
    return (BASE_PATH.$value);

}
function view($path,$attributes=[]) {
    extract($attributes);
    require base_path('views/' . $path);
}