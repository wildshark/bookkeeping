<?php

$_SESSION['auth'] = true;
$_SESSION['start'] = time();
$_SESSION['expire'] = $_SESSION['start'] + (30 * 60); //session for 30min

?>