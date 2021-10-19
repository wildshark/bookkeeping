<?php
$token = $_GET['token'];
$page = $_REQUEST["_page"];
switch($page){

    case"dashboard";
        require("template/{$page}.php");
    break;

    case"income";
        $res = tranaction::fetch_income($conn);
        require("template/{$page}.php");
    break;

    case"expenses";
        $res = tranaction::fetch_expenses($conn);
        require("template/{$page}.php");
    break;

    case"cash";
        $res = tranaction::fetch_cash($conn);
        require("template/{$page}.php");
    break;

    case"bank";
        $res = tranaction::fetch_bank($conn);
        require("template/{$page}.php");
    break;

    case"transaction";
        $res = tranaction::view($conn,$_GET['id']);
        require("template/transaction.php");
    break;

    case"payroll";
        require("template/{$page}.php");
    break;

    case"category";
        require("template/{$page}.php");
    break;

    case"user";
        require("template/{$page}.php");
    break;

    default;
        require("template/404.php");
}


?>