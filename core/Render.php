<?php

namespace Core;

class Render
{
    public static function getView($view)
    {
        $view = 'app/views/' . $view . '.php';

        if (file_exists($view)) {
            ob_start();
            include_once $view;
        }
        return ob_get_flush();
    }
}