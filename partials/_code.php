<?php
session_start();
require '_dbconnect.php';

if(isset($_POST['login_btn']))
{
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = "SELECT * FROM users where username='$username' and password='$password' LIMIT 1";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) > 0)
    {
        foreach($query_run as $data){
            $user_id = $data['ID'];
            $user_name = $data['name'];
            $user_email = $data['email'];
            $user_role = $data['user_role'];
        }

        $_SESSION['auth'] = true;
        $_SESSION['auth_role'] = "$user_role"; //1-admin, 0-user
        $_SESSION['auth_user'] = [
            'user_id'=>$user_id,
            'username'=>$user_name,
            'email'=>$user_email,
        ];

        if($_SESSION['auth_role'] == '1') //admin
        {
            header("Location: http://localhost/AdmissionPortal/adminview.php");
            $_SESSION['message'] = "Welcome to Admin Panel"; 
            exit(0);
        }
        elseif($_SESSION['auth_role'] == '0') //user
        {
            $_SESSION['message'] = "You are Logged In"; 
            header("Location: http://localhost/AdmissionPortal/admission_form.php");
            exit(0);
        }


        $_SESSION['message'] = "You are Logged In Successfully"; //message to show
        header("Location: http://localhost/AdmissionPortal/login.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Invalid Email or Password"; //message to show
        header("Location: http://localhost/AdmissionPortal/login.php");
        exit(0);
    }
}

if(isset($_POST['register_student']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);
    $c_pass = mysqli_real_escape_string($con, $_POST['c_pass']);

    $query = "INSERT INTO users (name,email,username,password,confirmPass) VALUES ('$name','$email','$username','$pass','$c_pass')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Registration is Successful!";
        header("Location: http://localhost/AdmissionPortal/register.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Registration failed!";
        header("Location: http://localhost/AdmissionPortal/register.php");
        exit(0);
    }
}

if(isset($_POST['form_btn']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobileno = mysqli_real_escape_string($con, $_POST['mobileno']);
    $class = mysqli_real_escape_string($con, $_POST['class']);

    $query = "INSERT INTO personal_details (name,dob,email,mobileno,class) VALUES ('$name','$dob','$email','$mobileno','$class')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "Your form is submitted sucessfully!";
        header("Location: http://localhost/AdmissionPortal/login.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Form is not submitted!";
        header("Location: http://localhost/AdmissionPortal/admission_form.php");
        exit(0);
    }
}
?>