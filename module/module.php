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
    }
}




?>