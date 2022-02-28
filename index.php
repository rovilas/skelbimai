<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

date_default_timezone_set('Europe/Vilnius');
include 'vendor/autoload.php';
include 'config.php';
session_start();

if (isset($_SERVER['PATH_INFO']) && $_SERVER['PATH_INFO'] !== '/') {
    $path = trim($_SERVER['PATH_INFO'], '/');
    $path = explode('/', $path);
    $class = ucfirst($path[0]);
    if (isset($path[1])) {
        $method = $path[1];
    } else {
        $method = 'index';
    }

    $class = '\Controller\\' . $class;
    if (class_exists($class)) {
        $obj = new $class();
        // Controller\Catalog
        if (method_exists($obj, $method)) {
            if (isset($path[2])) {
                $obj->$method($path[2]);
            } else {
                $obj->$method();
            }
        } else {
            $error = new \Controller\Error();
            $error->error404();
        }
    } else {
        $error = new \Controller\Error();
        $error->error404();
    }
} else {
    $obj = new \Controller\Home();
    $obj->index();
}
