<?php

function mysqlite_conn($server){

    $db = $server['db_name'];
    return  $db = new PDO("sqlite:books/".$db); 
}

function mysql_conn($server){

    $servername = $server['host'];
    $username = $server['username'];
    $password = $server['password'];
    $database = $server['db_name'];

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }else{
        return $conn;
    }
}

if($SYSTEM['db_conn'] === "mysql"){
    $conn = mysql_conn($SYSTEM['db_mysql']);
}else{
    $conn = mysqlite_conn($SYSTEM['db_sqlite']);
}

?>