<?php

$_SESSION['auth'] = true;
$_SESSION['start'] = time();
$_SESSION['expire'] = $_SESSION['start'] + (30 * 60); //session for 30min


function split_toke($str){

    $i = str_split($str,8);
    return $i[0]."-".$i[1]."-".$i[2]."-".$i[3];
}

function category($combo){

    foreach($combo as $r){
        echo"<option value='{$r['category_id']}'>{$r['category_title']}</option>";
    }
}

function category_expenses($combo){

    foreach($combo as $r){
        echo"<option value='{$r['category_id']}'>{$r['category_title']}</option>";
    }
}


?>