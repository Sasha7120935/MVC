<?php
//
//require dirname(__DIR__) . "/vendor/autoload.php";
//use\core\Router;
////error_reporting(E_ALL);
////set_error_handler('Core\Error::errorHandler');
////set_exception_handler('Core\Error::exceptionHandler');
//$router = new Router();
//require_once 'routes/routes.php';
////$router = new Core\Router();
////$router->add('', ['controller' => 'Home', 'action' => 'index']);
////$router->add('{controller}/{action}');
//
//$router->dispatch(trim($_SERVER['REQUEST_URI'],'/'));

/**
 * Front controller
 *
 * PHP version 7.0
 */
/**
 * Composer
 */
require dirname(__DIR__) . '/vendor/autoload.php';
require dirname(__DIR__) . '/config/constants.php';
//require dirname(__DIR__) . '/config/functions.php';
/**
 * Error and Exception handling
 */
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');
///**
// * Routing

$router = new Task1\Core\Router();

require dirname(__DIR__) . '/routes/web.php';

if(!preg_match('/assets/i', $_SERVER['REQUEST_URI'])) {

    $router->dispatch($_SERVER['REQUEST_URI']);
//if(!preg_match('/assets/i',$_SERVER['QUERY_STRING'])){
//$router->dispatch($_SERVER['QUERY_STRING']);
//}
}