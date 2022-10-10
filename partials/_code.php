<?php
session_start();
// $login = false;
require '_dbconnect.php';

if(isset($_POST['login']))
{

//     if($num > 0){
//         while($row=mysqli_fetch_assoc($query_run)){
//         if (password_verify($password, $row['password'])){ 
//             // $login = true;
//             // session_start();
//             // $_SESSION['username'] = $username;
//             // $_SESSION['password'] = $password;
//             // header("location: home_page.php");
//         } 
//         else{
//             $showError = "Invalid Credentials";
//         }
//     }
// }

    // if($num > 0){
    //     $data = $query_run->fetch_array();
    //     if(password_verify($password, $data['password'])){
    //         header("Location: http://localhost/AdmissionPortal/adminview.php");
    //         $_SESSION['message'] = "Welcome to Admin Panel"; 
    //         exit(0);
    //     }
    // }else{
    //     $_SESSION['message'] = "Error"; 
    // }


$username = mysqli_real_escape_string($con, $_POST['username']);
$password = mysqli_real_escape_string($con, $_POST['password']);

$query = "SELECT * FROM users where username='$username'";
$query_run = mysqli_query($con, $query);

    if($num > 0){
        $data = $query_run->fetch_array();
        if(password_verify($password, $data['password'])){

            header("Location: http://localhost/AdmissionPortal/adminview.php");
            $_SESSION['message'] = "Welcome to Admin Panel"; 
            exit(0);
        
        }
    }else{
        $_SESSION['message'] = "Error"; 
    }

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
    $_SESSION['message'] = "Invalid Username or Password"; //message to show
    header("Location: http://localhost/AdmissionPortal/login.php");
    exit(0);
}
}

if(isset($_POST['logout_btn']))
{
    unset($_SESSION['auth']);
    unset($_SESSION['auth_role']);
    unset($_SESSION['auth_user']);

    $_SESSION['message'] = "Logged Out Sucessfully";
    header("Location: http://localhost/AdmissionPortal/home_page.php");
    exit(0);
}

if(isset($_POST['register_student']))
{
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $pass = mysqli_real_escape_string($con, $_POST['pass']);
    $c_pass = mysqli_real_escape_string($con, $_POST['c_pass']);

    if($pass == $c_pass){
        $checkemail = "SELECT email FROM users WHERE email='$email'";
        $checkemail_run = mysqli_query($con, $checkemail);

        if(mysqli_num_rows($checkemail_run) > 0){
            $_SESSION['message'] = "Email already exists";
            header("Location: http://localhost/AdmissionPortal/register.php");
            exit(0);
        }else{
            $hash = password_hash($pass, PASSWORD_DEFAULT); //added hash 
            $query = "INSERT INTO users (name,email,username,password) VALUES ('$name','$email','$username','$hash')";

            $query_run = mysqli_query($con, $query);
            if($query_run)
            {
                $_SESSION['message'] = "Registration is Successful!";
                header("Location: http://localhost/AdmissionPortal/login.php");
                exit(0);
            }
            else
            {
                $_SESSION['message'] = "Registration failed!";
                header("Location: http://localhost/AdmissionPortal/register.php");
                exit(0);
            }
        }

    }else{
        $_SESSION['message'] = "Password and Confirm Password does not Match";
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
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $class = mysqli_real_escape_string($con, $_POST['class']);

    $query_personal = "INSERT INTO personal_details (name,dob,email,mobileno,gender,class) VALUES ('$name','$dob','$email','$mobileno','$gender','$class')";

    $address_type = mysqli_real_escape_string($con, $_POST['address_type']);
    $nationality = mysqli_real_escape_string($con, $_POST['nationality']);
    $state = mysqli_real_escape_string($con, $_POST['state']);
    $district = mysqli_real_escape_string($con, $_POST['district']);
    $area = mysqli_real_escape_string($con, $_POST['area']);
    $building_name = mysqli_real_escape_string($con, $_POST['building_name']);

    $query_address = "INSERT INTO address_details (address_type,nationality,state,district,area,building_name) VALUES ('$address_type','$nationality','$state','$district','$area','$building_name')";

    $father_name = mysqli_real_escape_string($con, $_POST['father_name']);
    $mother_name = mysqli_real_escape_string($con, $_POST['mother_name']);
    $sibblings_no = mysqli_real_escape_string($con, $_POST['sibblings_no']);
    $father_contact = mysqli_real_escape_string($con, $_POST['father_contact']);
    $mother_contact = mysqli_real_escape_string($con, $_POST['mother_contact']);
    $telephone = mysqli_real_escape_string($con, $_POST['telephone']);

    $query_family = "INSERT INTO family_details (father_name,mother_name,sibblings_no,father_contact,mother_contact,telephone) VALUES ('$father_name','$mother_name','$sibblings_no','$father_contact','$mother_contact','$telephone')";

    $query_run = mysqli_query($con, $query_personal);
    $query_run_add = mysqli_query($con, $query_address);
    $query_run_fam = mysqli_query($con, $query_family);
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