<?php
session_start();
if(!isset($_SESSION['auth'])) $_SESSION['auth']='';
ini_set('display_errors', 1);
error_reporting(E_ALL);

define('ROOT', dirname(__FILE__));
require_once (ROOT.'/components/router.php');
require_once (ROOT.'/components/db.php');

$router = new Router();
$router->run();

?>