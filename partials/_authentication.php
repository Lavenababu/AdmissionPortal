<?php
session_start();
// include('_dbconnect.php');

if(isset($_SESSION['auth'])){

    $_SESSION['message'] = "Login to Access Dashboard";
    header("Location: http://localhost/AdmissionPortal/login.php");
    exit(0);
}else{
    if($_SESSION['auth_role'] != "1"){
        $_SESSION['message'] = "You are not Authorised as ADMIN";
        header("Location: http://localhost/AdmissionPortal/login.php");
        exit(0);
    }
}
?>