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

            }elseif($_action === "register"){

            }elseif($_action === "recovery"){

            }
        break;
    }
}




?>