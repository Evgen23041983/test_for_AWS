<?php
session_start(); 
ini_set('display_errors', 1);



define('ROOT', dirname(__FILE__));
require_once(ROOT.'/components/Autoload.php');

$router = new Router();
$router->run();
?>
