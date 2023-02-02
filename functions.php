<?php

function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
}

function isUri($value) {
    return $_SERVER["REQUEST_URI"] === $value;
}