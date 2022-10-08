<?php
$server = "localhost:3308"; //3308
$username = "root";
$password = "";
$database = "admission_portal";

$con = mysqli_connect($server, $username, $password, $database);
if (!$con){
    die("Error". mysqli_connect_error());
}




