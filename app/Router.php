<?php
/**
 * Created by PhpStorm.
 * User: davidoff
 * Date: 03.09.17
 * Time: 21:59
 */

namespace App;


class Router
{
//    public function __construct()
//    {
//        echo 'Hello';
//    }

    /**
     * Весь массив маршрутов. Сюда можно добавлять новые маршруты
     * @var array
     */
    protected static $routes = [];
    /**
     * В данном массвие будет лежать текущий маршрут,
     * по которому мы будем всегда знать какой контроллер
     * и метод его исспользовать
     * @var array
     */
    protected static $route = [];

    /**
     * Будет принимать регулярное выражение
     * @param $regexp
     * @param $route
     */
    public static function addRoute($regexp, $route = [])
    {
        self::$routes[$regexp] = $route;

    }

    public static function getRoutes()
    {
       return self::$routes;
    }

    public static function getRoute()
    {
        return self::$route;
    }

    public static function matchRoute($url)
    {
        foreach (self::$routes as $pattern => $route) {
            if($url == $pattern) {
                self::$route = $route;
                return true;
            }
        }
        return false;
    }
}