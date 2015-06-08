<?php 
    $host_name  = "db562804681.db.1and1.com";
    $database   = "db562804681";
    $user_name  = "dbo562804681";
    $password   = "testtest";

    $connect = mysql_connect($host_name, $user_name, $password, $database);
    mysql_select_db($database) or die( 'Error'. mysql_error() );
?>