<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<?php

ini_set('display_errors', 1);

include '../vendor/autoload.php';
$routes = include '../config/routes.php';

$url = explode('?', $_SERVER['REQUEST_URI'])[0];

use App\Controller\ErrorController;

if (false === isset($routes[$url])) {
  (new ErrorController)->notFoundAction();
  exit;
}

$controllerName = $routes[$url]['controller'];
$methodName = $routes[$url]['method'];

(new $controllerName())->$methodName();

// ------------------------------------------

// use App\Connection\Connection;

// $connection = Connection::getConnection();

// $query = "SELECT * FROM tb_category;";

// $preparacao = $connection->prepare($query);
// $preparacao->execute();

// var_dump($preparacao->fetch()); 

// while ($registro = $preparacao->fetch()) {
//   var_dump($registro);
// }


// var_dump($connection);
// echo phpinfo();






