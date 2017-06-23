<?php
require_once 'controller/config.php';
include_once 'model/M_mysql.php';
include_once 'model/M_comments.php';
include_once 'model/M_user.php';

function __autoload($className){
    include_once "controller/$className.php";
}
session_start();
if (!isset($_SESSION['userType'])) $_SESSION['userType'] = 333;
//var_dump($_SESSION);


// Определяем переданное действие
$action = 'Action_';
if (isset($_GET['a'])){
    $action .= $_GET['a'];
}
else $action .= 'index';
//-----------------------------


// Генерируем и выводим страницу
$controller = new C_page();

$controller->$action();
$controller->render();
