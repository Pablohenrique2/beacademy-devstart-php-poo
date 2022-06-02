<?php
include "../vendor/autoload.php";

use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\CategoryController;
use App\Controller\ErrorController;


include dirname(__DIR__) . '/src/View/menu/nav.php';

$url = explode('?', $_SERVER['REQUEST_URI'])[0];

function createRouter(string $controllerName, string $methodName)
{
  return ["controller" => $controllerName, 'method' => $methodName];
}

$routes = [
  '/' => createRouter(IndexController::class, "loginAction"),
  '/produto' => createRouter(ProductController::class, 'listAction'),
  '/produto/novo' => createRouter(ProductController::class, 'addAction'),

];

if (false == isset($routes[$url])) {
  (new ErrorController)->notFoundAction();
}

$controllerName = $routes[$url]['controller'];
$methodName = $routes[$url]['method'];
(new $controllerName())->$methodName();
