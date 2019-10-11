<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "my_trips";

 // $db_host = "mysql1004.mochahost.com";
 // $db_user = "sorinh_user";
 // $db_pass = "12345";
 // $db_name = "sorinh_my_trips";

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
$query_set = 'SET NAMES utf8';
mysqli_query($connection, $query_set);

if ($connection === false){
    die("Error: Could not conect. " . mysqli_connect_error());
}
?>