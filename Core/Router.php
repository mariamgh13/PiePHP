<?php

namespace Core;

class Router
{
    private static $routes;
    public static function connect($url, $route)
    {
        self::$routes[$url] = $route;
        // var_dump(self::$routes[$url]);
    }
    public static function get($url)
    {
        //echo $url;
        // retourne un tableau associatif contenant
        // - le controller a instancier
        // - la methode du controller a appeler
    //    print_r($url);
        // print_r(self::$routes);


        // if(isset(self::$routes[$url])){
        // return self::$routes[$url];
        // }
        return array_key_exists($url,self::$routes) ? self::$routes[$url] : ['controller' => 'error', 'action' => 'notFound'] ;
    }
}
