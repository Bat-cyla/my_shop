<?php



session_start();
require_once __DIR__ . '/vendor/autoload.php';
require_once __DIR__ . '/vendor/smarty/smarty/src/Smarty.php';
$routes=require_once 'app/routes.php';
$url=rtrim($_SERVER['REQUEST_URI'],'?');
if(isset($routes[$url])){
   [$controllerName, $action]=$routes[$url];
}else{
    echo 'Маршрут не найден';
    $controllerName=false;
    $action=false;
}
    if (!class_exists($controllerName)) {
        echo 'Контроллер не существует';
    }
    $controller = new $controllerName();

    if (!method_exists($controller, $action)) {
        echo 'Метод не существует';
    }
    if (isset($url[1])) {
        $controller->$action($url[1]);
    } else {
        $controller->$action();
    }
    exit;


