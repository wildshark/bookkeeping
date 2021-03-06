<?php
$token = $_GET['token'];
$page = $_REQUEST["_page"];
//var_dump($page);
//exit;
$_income =  category::fetch_income($conn);
$_expenses =  category::fetch_expenses($conn);

if(!isset($_SESSION['token'])){
    header("location: ?_user=session-close");
}else{
    switch($page){

        case"log-off";
            session_destroy();
            echo"
                <script type='text/javascript'>
                    window.close() ;
                </script>";
                header("location: ?_user=session-close");    
            exit;
        break;


        case"dashboard";
            $bank = transaction::total_bank($conn);
            $cash = transaction::total_cash($conn);
            $total = transaction::total($conn);
            $gerenal = transaction::fetch_gerenal_transaction($conn);
            if($total == false){
                $total = array(
                    "dr"=>"0.00",
                    "cr"=>"0.00",
                    "bal"=>"0.00",
                );
            }
            if($bank == false){
                $bank['bal'] ="0.00";
            };
            if($cash == false){
                $cash['bal'] ="0.00";
            };
            require("template/{$page}.php");
        break;

        case"income";
            $total = transaction::total($conn);
            if($total == false){
                $total['cr'] =0;
            }
            $res = transaction::fetch_income($conn);
            require("template/{$page}.php");
        break;

        case"expenses";
            $total = transaction::total($conn);
            if($total == false){
                $total['cr'] =0;
            }
            $res = transaction::fetch_expenses($conn);
            require("template/{$page}.php");
        break;

        case"cash";
            $total = transaction::total_bank($conn);
            if($total == false){
                $total = array("dr"=>0,"cr"=>0,"bal"=>0);
            }
            $res = transaction::fetch_cash($conn);
            require("template/{$page}.php");
        break;

        case"bank";
            $total = transaction::total_cash($conn);
            if($total == false){
                $total = array("dr"=>0,"cr"=>0,"bal"=>0);
            }
            $res = transaction::fetch_bank($conn);
            require("template/{$page}.php");
        break;

        case"transaction";
            $res = transaction::view($conn,$_GET['id']);
            require("template/transaction.php");
        break;

        case"ledger";
            $total = transaction::total($conn);
            if($total == false){
                $total = array("dr"=>0,"cr"=>0,"bal"=>0);
            }
            $res = transaction::ledger($conn);
            require("template/{$page}.php");
        break;

        case"ledger-details";
            $res = transaction::ledger_details($conn,$_GET['id']);
            require("template/ledger.details.php");
        break;

        case"category";
            $incomes = category::fetch_income($conn);
            $expenses = category::fetch_expenses($conn);
            require("template/{$page}.php");
        break;

        case"payroll";
            $res = payroll::fetch_main($conn);
            require("template/{$page}.php");
        break;

        case"payroll.details";
            $_SESSION['payroll'] = $_GET['id'];
            $data = payroll::fetch_details($conn,$_GET['id']);
            require("template/{$page}.php");
        break;

        case"report";
            $income = report::income($conn,$_GET);
            $expenses = report::expenses($conn,$_GET);
            require("template/{$page}.php");
        break;

        case"investment";
            $total = investment::total_main($conn);
            
            if($total == false){
                $total = array("invest"=>0,"profit"=>0,"cashout"=>0);
            }
            $res = investment::fetch_main($conn);
            require("template/{$page}.main.php");
        break;

        case"investment-details";
            $_SESSION['invest_id'] = $_GET['id'];
            $total = investment::total_details($conn,$_GET['id']);
            if($total == false){
                $total = array("invest"=>0,"profit"=>0,"cashout"=>0);
            }
            $res = investment::fetch_details($conn,$_GET['id']);
            require("template/investment.details.php");
        break;

        case"user";
            require("template/{$page}.php");
        break;

        default;
            require("template/404.php");
    }
}



?>