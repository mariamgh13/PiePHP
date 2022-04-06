<?php

spl_autoload_register(function($class){
    $path = str_replace("\\", "/", $class ) . '.php';
    // print_r($path . PHP_EOL);
    if(file_exists($path)){
        require_once($path);
        }
    if(file_exists('src/Controller/' . $path)){
    require_once('src/Controller/' . $path);
    }
    if(file_exists('src/Model/' . $path)){
        require_once('src/Model/' . $path);
        }
    if(file_exists('src/' . $path)){
            require_once('src/' . $path);
            }
    // include 'src/' . $class . '.php';
});