<?php

namespace Mvc\Http\Routing;

use Mvc\Http\Routing\Exceptions\RouterExceptions;

class Router
{
    private string $path;

    private static Route $routes;

    public function __construct($path, Route $routes = null)
    {
        $this->path = $path;
        if($routes)
            self::$routes = $routes;
    }

    //regex -> wyrażenia regularne
    private function matchRoute(array $route)
    {
//        if($route['path'] == $this->path)
//            return true;
//
//        return false;

        $params = [];
        foreach ($route['params'] as $param) {
            $params['{' . $param . '}'] = '[a-zA-Z0-9-]+';
        }

        $path = str_replace(array_keys($params), $params, $route['path']);
        preg_match("#^$path$#", $this->path, $results);

        if($results)
            return true;
        return false;
    }

    private function setGetData(array $route)
    {
        $trim = explode('{', $route['path']);
        $parsedPath = preg_replace("#$trim[0]#",'', $this->path,1);

        foreach($route['params'] as $param) {
            preg_match("#[a-zA-Z0-9-]+#", $parsedPath,$results);
            //$_GET[$param] = $results;
            //to się dubluje, dlatego tworzymy tymczasowa ściężkę
            $tempPath = explode($results[0],$parsedPath,2);
            $parsedPath = $tempPath[1];

            $_GET[$param] = $results[0];
        }
        //print_r($trim);
        print_r($parsedPath);
    }

    public function run()
    {
        try {
            foreach (self::$routes->getRoutes() as $route) {
                if($this->matchRoute($route)) {
                    $this->setGetData($route);
                    return call_user_func($route['action']);
                }
            }
            throw new RouterExceptions('No route found.');
        } catch (RouterExceptions $exception) {
            exit($exception->report());
        }
    }
}
