<?php
ob_start();
require "source/config.php";

require __DIR__ . "/vendor/autoload.php";


use CoffeeCode\Router\Router;


$router = new Router(URL_BASE);
$router -> group(null);
$router->namespace("app\controllers");

$router->get('/', 'HomeController:index');
$router->get('/dados', 'DadosController:dados');


$router->dispatch();


if ($router->error()) {
    var_dump($router->error());
}

ob_end_flush();
?>
