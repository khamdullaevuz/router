<?php

$routes = [
 ''=>'views/index.php',
 'about'=>'views/about.php'
];

$request = trim($_SERVER['REQUEST_URI'], "/");

if(array_key_exists($request, $routes)){
    require '../'.$routes[$request];
}else{
    $error = '404 not found';
    require '../views/error.php';
}