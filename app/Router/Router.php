<?php

namespace App\Router;



class Router
{
    private array $routes=[
        'GET'=>[],
        'POST'=>[],
        ];
    public function __construct()
    {
        $this->initRoutes();

    }

    public function dispatch(string $url, string $method): void
    {

        $route=$this->findRoute($url, $method);
        if(!$route){
            $this->notFound();
            return;
        }
        if(is_array($route->getAction())){
            [$controller,$action]=$route->getAction();
            $controller=new $controller();
            call_user_func([$controller, $action]);
        }else{
            $route->getAction()();
        }

    }
    public function match($url, $method)
    {
        $routes=self::getRoutes();
        foreach ($routes as $route) {
            if ($route->getMethod() === $method && preg_match($route->getUrl(), $url, $matches)) {
                array_shift($matches); // Удаляем первый элемент (полное совпадение)
                $this->routes[$route->getMethod()][$route->getUrl()] = $route;
            }
        }
        return null;
    }

    private function notFound(): string
    {
        echo '404 | Not Found';
        exit;
    }
    private function findRoute(string $url, string $method): Route|false
    {
        if(!isset($this->routes[$method][$url])){
            $this->match($url, $method);
        }
        return $this->routes[$method][$url];
    }
    private function initRoutes(): void
    {
        $routes = $this->getRoutes();
        foreach ($routes as $route) {
            $this->routes[$route->getMethod()][$route->getUrl()] = $route;
        }
    }

    /**
     * @return Route[]
     */

    public function getRoutes() : array
    {
         return require_once APP_PATH . '/app/routes.php';
    }
}