<?php
require_once 'controller/config.php';
include_once 'model/M_mysql.php';
include_once 'model/M_comments.php';
function __autoload($className){
    include_once "controller/$className.php";

}


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
