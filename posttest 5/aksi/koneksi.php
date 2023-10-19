<?php
    error_reporting(0);
    session_start();
    $host="localhost";
    $username="root";
    $password="";
    $databasename="belajar";
    $connection = mysql_connect($host,$username,$password)or die(mysql_error());
    mysql_select_db($databasename, $connection) or die (mysql_error());

?>