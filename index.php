<?php
session_start();
$_CONFIG = "config.json";
/*
    * The code, text, PHP logo, and graphical elements on this website and the mirror websites (the "Site") are Copyright © 2001-2021 The PHP Group. All rights reserved.
    *
    * Except as otherwise indicated elsewhere on this Site, you are free view, download and print the documents and information available on this Site subject to the following conditions:
    *
    * You may not remove any copyright or other proprietary notices contained in the documents and information on this Site.
    * The rights granted to you constitute a license and not a transfer of title.
    * The rights specified above to view, download and print the documents and information available on this Site are not applicable to the graphical elements, design or layout of this Site. These elements of the Site are protected by trade dress and other laws and may not be copied or imitated in whole or in part.
    * You can contact the webmaster at php-webmaster@lists.php.net.

    * For more information on the PHP Group and the PHP project, please see https://php.net.
*/

if(!file_exists($_CONFIG)){
    echo"Missing congifuration file";
    exit;
}else{
    $_CONFIG = json_decode(file_get_contents($_CONFIG),TRUE);
    $SYSTEM = $_CONFIG['config'];
    //control and function
    include("control/db.php");
    include("control/global.php");
    include("control/control.php");
    include("control/template.php");

    //module
    include("module/user.php");
    include("module/transaction.php");
    include("module/category.php");
    include("module/payroll.php");
    include("module/investment.php");
    include("module/report.php");
    
    if(!$_SESSION['auth']) {
        header('location:index.php');
      }else{
        $currentTime = time();
        if($currentTime > $_SESSION['expire']) {
            session_unset();
            session_destroy();
            header('location:index.php');
        }else{
            if(!isset($_REQUEST['_submit'])){
                if(!isset($_REQUEST['_page'])){
                    session_destroy();
                    require("template/login.php");                    
                }else{
                    require("module/navigation.php");
                }
            }else{
                require("module/module.php");
                header("location: ?".http_build_query($url));
            }    
        }
    }
}


?>