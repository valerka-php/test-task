<?php
ini_set('display_errors', 1);
require 'vendor/autoload.php';

use Core\Router;

Router::run($_SERVER['REQUEST_URI']);
