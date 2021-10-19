<?php

$_SESSION['auth'] = true;
$_SESSION['start'] = time();
$_SESSION['expire'] = $_SESSION['start'] + (30 * 60); //session for 30min


function split_toke($str){

    $i = str_split($str,8);
    return $i[0]."-".$i[1]."-".$i[2]."-".$i[3];
}

?>