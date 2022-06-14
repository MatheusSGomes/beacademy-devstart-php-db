<?php

use App\Controller\IndexController;
use App\Controller\ProductController;
use App\Controller\CategoryController;

function createRoute(string $controllerName, string $methodName) {
  return [
    'controller' => $controllerName,
    'method' => $methodName
  ];
}

$routes = [
  '/' => createRoute(IndexController::class, 'indexAction'),
  '/login' => createRoute(IndexController::class, 'loginAction'),
  '/produtos' => createRoute(ProductController::class, 'listAction'),
  '/produtos/novo' => createRoute(ProductController::class, 'addAction'), 
  '/categorias' => createRoute(CategoryController::class, 'listAction'),
  '/categorias/nova' => createRoute(CategoryController::class, 'addAction')
];

return $routes;