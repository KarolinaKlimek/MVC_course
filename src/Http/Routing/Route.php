<?php

namespace Mvc\Http\Routing;

use Closure;
class Route
{
    private array $routes = [];

    //Closure - można użyć funckji w parametrze innej funkcji
    public function set(string $path, \Closure $action, array $params = [])
    {
        $this->routes[] = ['path' => $path, 'action' => $action, 'params' => $params];
    }

    public function getRoutes()
    {
        return $this->routes;
    }
}
