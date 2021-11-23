<?php
if(!isset($_REQUEST["_submit"])){
    $url['action'] =="missing-request";
}else{

    $submit = explode("-",$_REQUEST["_submit"]);
    $_module = $submit[0];
    $_action = $submit[1];

    switch($_module){

        case"user";
            if($_action === "login"){
                $q[] = $_REQUEST['username'];
                $q[] = $_REQUEST['password'];
                $response = user::login($conn,$q);
                if($response === false){
                    $url["_user"] = "lgoin";    
               }else{
                   if(!isset($_SESSION['username'])){
                       $_SESSION = $response;
                   }
                    $token = md5($response['username'].$response['role']);
                    $_SESSION['token'] = $token;
                    if($response['role'] === "admin"){
                        $url['_page'] = "dashboard";
                        $url['token'] = $token;
                    }else{
                        $url['_client'] = "dashboard";
                        $url['token'] = $token;
                    } 
               }

            }elseif($_action === "register"){

            }elseif($_action === "recovery"){

            }
        break;

        case"transaction";
            
            if($_action === "income"){
                $q[] = time();
                $q[] = $_REQUEST['date'];
                $q[] = $_REQUEST['category'];
                $q[] = $_REQUEST['details'];
                $q[] = strtolower($_REQUEST['type']);
                $q[] = $_REQUEST['ref'];
                $q[] = $_REQUEST['amt'];
                $response = transaction::add_income($conn,$q);

            }elseif($_action === "expenses"){
                $q[] = time();
                $q[] = $_REQUEST['date'];
                $q[] = $_REQUEST['category'];
                $q[] = $_REQUEST['details'];
                $q[] = strtolower($_REQUEST['type']);
                $q[] = $_REQUEST['ref'];
                $q[] = $_REQUEST['amt'];
                $response = transaction::add_expenses($conn,$q);

            }elseif($_action === "delete"){
                $id = $_REQUEST['id'];
                $response = transaction::delete($conn,$id);
            }

            if($response  === false){
                $url['_page'] = "dashboard";
                $url['token'] = $_SESSION['token'];
                $url['e']=100;
            }else {
                $url['_page'] = strtolower($_REQUEST['type']);
                $url['token'] = $_SESSION['token']; 
                $url['e']=200;
            }

        break;

        case"category";
            if($_action === "add"){
                $q[] = $_REQUEST['type'];
                $q[] = $_REQUEST['title'];
                $response = category::add($conn,$q);
            }elseif ($_action ==="delete") {
                $q[] = $_REQUEST['id'];
                $response = category::delete($conn,$q);
            }elseif($_action ==="status"){
                $q[] = $_REQUEST['status'];
                $q[] = $_REQUEST['id'];
                $response = category::status($conn,$q);
            }
            if($response  === false){
                $url['_page'] = "dashboard";
                $url['token'] = $_SESSION['token'];
                $url['e']=100;
            }else {
                $url['_page'] = "category";
                $url['token'] = $_SESSION['token']; 
                $url['e']=200;
            }
        break;

        case"payroll";
            if($_action === "main"){
                switch($submit[2]){

                    case"add";
                        $q[] = $_REQUEST['date'];
                        $q[] = $_REQUEST['month'];
                        $response = payroll::add_main($conn,$q);
                        $page = "payroll";

                    break;
                    case"update";
                        $q[] = $_REQUEST['date'];
                        $q[] = $_REQUEST['month'];
                        $q[] = $_REQUEST['id'];
                        $response = payroll::update_main($conn,$q);
                    break;

                    case"delete";
                        $q[] = $_REQUEST['id'];
                        $response = payroll::delete_main($conn,$q);   
                        $page = "payroll";                     
                    break;
                }
                if($response  === false){
                    $url['_page'] = "dashboard";
                    $url['token'] = $_SESSION['token'];
                    $url['e']=100;
                }else {
                    $url['_page'] = "payroll";                    
                    $url['token'] = $_SESSION['token']; 
                    $url['e']=200;
                }
            }elseif($_action === "details"){
                $id = $_SESSION['payroll'];
                switch($submit[2]){
                    case"add";
                        $q[] = $_SESSION['payroll'];
                        $q[] = $_REQUEST['staff'];
                        $q[] = $_REQUEST['ref'];
                        $q[] = $_REQUEST['basic'];
                        $q[] = $_REQUEST['provt_fund'];
                        $q[] = $_REQUEST['paye'];
                        $q[] = $_REQUEST['education_loan'];
                        $q[] = $_REQUEST['salary_advance'];
                        $q[] = $_REQUEST['rent_advance'];
                        $q[] = payroll::ssf($_REQUEST);
                        $q[] = payroll::taxable_income($_REQUEST);
                        $q[] = payroll::gross_salary($_REQUEST);
                        $q[] = payroll::net_salary($_REQUEST);
                        $q[] = payroll::ssf_13($_REQUEST);
                        $q[] = payroll::ssnit($_REQUEST);
                        $response = payroll::add_details($conn,$q);
                        $page = "payroll.details";
                    break;
                    
                    case"update";
                        $q[] = $_REQUEST['payroll_id'];
                        $q[] = $_REQUEST['staff'];
                        $q[] = $_REQUEST['ref'];
                        $q[] = $_REQUEST['basic'];
                        $q[] = $_REQUEST['provt_fund'];
                        $q[] = $_REQUEST['paye'];
                        $q[] = $_REQUEST['education_loan'];
                        $q[] = $_REQUEST['salary_advance'];
                        $q[] = $_REQUEST['rent_advance'];
                        $q[] = payroll::ssf($_REQUEST);
                        $q[] = payroll::taxable_income($_REQUEST);
                        $q[] = payroll::gross_salary($_REQUEST);
                        $q[] = payroll::net_salary($_REQUEST);
                        $q[] = payroll::ssf_13($_REQUEST);
                        $q[] = payroll::ssnit($_REQUEST);
                        $q[] = $_REQUEST['id'];
                        $response = payroll::update_details($conn,$q);
                        $page = "payroll.details";
                    break;

                    case"delete";
                        $q[] = $_REQUEST['id'];
                        $response = payroll::delete_details($conn,$q);
                        $page = "payroll.details";
                    break;
                }

                if($response  === false){
                    $url['_page'] = "dashboard";
                    $url['token'] = $_SESSION['token'];
                    $url['e']=100;
                }else {
                    $url['_page'] = $page;                    
                    $url['token'] = $_SESSION['token']; 
                    $url['id'] = $id;
                    $url['e']=200;
                }
    
            }
           
        break;

        case"investment";
            if($_action === "details"){
                $page = "investment-details";
                $id = $_SESSION['invest_id'];
                if($submit[2] === "add"){
                    $q[] = $_SESSION['invest_id'];
                    $q[] = $_REQUEST['date'];
                    $q[] = $_REQUEST['details'];
                    $q[] = $_REQUEST['ref'];
                    $q[] = $_REQUEST['amount'];

                    if($_REQUEST['type'] === "Investment"){
                        $response = investment::add_details_invest($conn,$q);
                    }elseif($_REQUEST['type'] === "Returns"){
                        $response = investment::add_details_profit($conn,$q);
                    }elseif($_REQUEST['type'] === "Cashout"){
                        $response = investment::add_details_checkout($conn,$q);
                    }
                }elseif($submit[1] === "delete"){
                    $q[] = $_REQUEST['id'];
                    $response = investment::delete_details($conn,$q);
                }           
            }elseif($_action === "main"){
                $page = "investment";
                if($submit[2] === "add"){
                    $q[] = $_REQUEST['title'];
                    $q[] = $_REQUEST['start'];
                    $q[] = $_REQUEST['end'];
                    $response = investment::add_main($conn,$q);

                }elseif($submit[2] === "update"){
                    $q[] = $_REQUEST['title'];
                    $q[] = $_REQUEST['start'];
                    $q[] = $_REQUEST['end'];
                    $q[] = $_REQUEST['id'];
                    $response = investment::update_main($conn,$q);
                }elseif($submit[2] === "delete"){
                    $q[] = $_REQUEST['id'];
                    $response = investment::delete_main($conn,$q);
                }
            }
            if($response  === false){
                $url['_page'] = "dashboard";
                $url['token'] = $_SESSION['token'];
                $url['e']=100;
            }else {
                $url['_page'] = $page;                
                $url['token'] = $_SESSION['token']; 
                $url['id'] = $id;
                $url['e']=200;
            }
        break;
    }
}




?>