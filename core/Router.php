<?php

namespace Core;

class Router
{
    private static string $controller;
    private static string $action;

    private static function setDefaultRoute(): void
    {
        self::$action = 'indexAction';
        self::$controller = 'HomeController';
    }

    public static function run(string $url): void
    {
        self::setDefaultRoute();

        $route = explode('/', $url);

        if (!empty($route[1])) {
            self::$controller = ucfirst($route[1]) . 'Controller';

        }
        if (!empty($route[2])) {
            self::$action = $route[2] . 'Action';
        }

        $class = 'App\controllers\\' . ucfirst(self::$controller);

        if (class_exists($class)) {
            $action = self::$action;
            if (method_exists($class, $action)) {
                $cObj = new $class();
                $cObj->$action();
            } else {
                echo 'error';
            }
        } else {
            echo 'error';
        }
    }
}