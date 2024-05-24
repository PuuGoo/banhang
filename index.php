<?php
session_start();
require_once "config.php";
spl_autoload_register(function ($class) {
    require "controllers/" . $class . ".php";
});

$baseDir = "/banhang/";


$router = [
    'get' => [
        '' => [new SanphamController, 'index'],
        'sp' => [new SanphamController, 'detail'],
        'loai' => [new SanphamController, 'cat'],
        'tk' => [new SanphamController, 'searchForm'],
        'addtocart' => [new SanphamController, 'addtocart'],
        'showcart' => [new SanphamController, 'showcart'],
        'checkout' => [new SanphamController, 'checkout'],
        'register' => [new UserController, 'register'],
        'login' => [new UserController, 'login'],
        'changepass' => [new UserController, 'changepass'],
    ],
    'post' => [
        'tk' => [new SanphamController, 'searchResult'],
        'checkout_' => [new SanphamController, 'checkout_'],
        'register_' => [new UserController, 'register_'],
        'login_' => [new UserController, 'login_'],
        'changepass_' => [new UserController, 'changepass_'],
    ]
];

// http://localhost/php2_lab1/banhang/Loai?idloai=1&page=3
$path = substr($_SERVER['REQUEST_URI'], strlen($baseDir)); // Loai?idloai=1&page=3 $arr explode("?", $path); // ['Loai', 'idloai=1&page=3] $route= strtolower($arr[0]); //loai
$arr = explode("?", $path);
$route = strtolower($arr[0]);
if (count($arr) >= 2) parse_str($arr[1], $params); // [idloai=>1, page=>3] 
else $params = [];
$method = strtolower($_SERVER['REQUEST_METHOD']); //get
if (!array_key_exists($method, $router)) die("Method kõ phù hợp: " . $method);
if (!array_key_exists($route, $router[$method])) die("Route đâu có:" . $route);
$action = $router[$method][$route]; // [0 => SanphamController, 1=> detail] 
call_user_func($action);
