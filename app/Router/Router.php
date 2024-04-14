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
        $route = $this->findRoute($url, $method);

        if (is_array($route)) {
            [$route, $params] = $route;
        }

        if(!$route){
            $this->notFound();
            return;
        }

        if(is_array($route->getAction())){
            [$controller,$action]=$route->getAction();
            $controller=new $controller();

            if (isset($params)) {
                call_user_func([$controller, $action], ...$params);
            } else {
                call_user_func([$controller, $action]);
            }
        }else{
            $route->getAction()();
        }

    }
    public function match($url, $method)
    {
        foreach ($this->routes[$method] as $route) {
            if ($params = $this->matchUrl($route->getUrl(), $url)) {
                return [$route, $params];
            }
        }
        return null;
    }

    private function notFound(): string
    {
        echo '404 | Not Found';
        exit;
    }
    private function findRoute(string $url, string $method): Route|array|null
    {
        if (!isset($this->routes[$method][$url])){
            return $this->match($url, $method);
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

    public function matchUrl($pattern, $url): array|null {
        $patternParts = explode('/', $pattern);
        $urlParts = explode('/', $url);

        if (count($patternParts) !== count($urlParts)) {
            return null;
        }

        $paramNames = [];
        foreach ($patternParts as $index => $part) {
            if (strpos($part, '{') === 0 && strrpos($part, '}') === strlen($part) - 1) {
                $paramNames[$index] = substr($part, 1, -1);
            }
        }

        $data = [];
        foreach ($patternParts as $index => $part) {
            if ($part !== $urlParts[$index]) {
                if (isset($paramNames[$index])) {
                    $data[$paramNames[$index]] = $urlParts[$index];
                } else {
                    return null;
                }
            }
        }

        return $data;
    }
}