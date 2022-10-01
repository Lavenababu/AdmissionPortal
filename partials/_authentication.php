<?php
session_start();

if(isset[$_SESSION'auth']){

    $_SESSION['message'] = "Login to Access Dashboard";
    header("Location: http://localhost/AdmissionPortal/login.php");
    exit(0);
}
?>