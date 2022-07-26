<?php
session_start();
require '_dbconnect.php';

if(isset($_POST['login']))
{

$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);

$query = "SELECT * FROM users where u_email='$email'";
$query_run = mysqli_query($con, $query);
$num = 1;

    if($num > 0){
        $data = $query_run->fetch_array();
        if(password_verify($password, $data['u_password'])){

            // header("Location: http://localhost/AdmissionPortal/home_page.php");
            // $_SESSION['message'] = "Welcome to Admin Panel"; 
            // exit(0);
        
        }
    }else{
        $_SESSION['message'] = "Error"; 
    }

if(mysqli_num_rows($query_run) > 0)
{
    foreach($query_run as $data){
        $user_id = $data['u_ID'];
        $user_name = $data['u_name'];
        $user_email = $data['u_email'];
        $user_role = $data['u_role'];
        $user_app = $data['u_application'];
    }

    $_SESSION['auth'] = true;
    $_SESSION['auth_role'] = "$user_role"; //1-admin, 0-user
    $_SESSION['auth_app'] = "$user_app";
    $_SESSION['auth_user'] = [
        'user_id'=>$user_id,
        'username'=>$user_name,
        'email'=>$user_email,
    ];

    if($_SESSION['auth_role'] == '1') //admin
    {
        $_SESSION['message'] = "Welcome to Admin Panel"; 
        header("Location: http://localhost/AdmissionPortal/admin_dashboard.php");
        exit(0);
    }
    elseif($_SESSION['auth_role'] == '0') //user
    {
        $_SESSION['message'] = "You are Logged In"; 
        header("Location: http://localhost/AdmissionPortal/home_page.php");
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
        $checkemail = "SELECT u_email FROM users WHERE u_email='$email'";
        $checkemail_run = mysqli_query($con, $checkemail);

        if(mysqli_num_rows($checkemail_run) > 0){
            $_SESSION['message'] = "Email already exists";
            header("Location: http://localhost/AdmissionPortal/register.php");
            exit(0);
        }else{
            $hash = password_hash($pass, PASSWORD_DEFAULT); //added hash 
            $query = "INSERT INTO users (u_name,u_email,u_username,u_password) VALUES ('$name','$email','$username','$hash')";

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

if(isset($_POST['form_btn'])){        
    // && isset($_FILES['file'])
    $title = $_POST["title"];
    $pname = $_FILES["file"]["name"];      //rand(1000,10000)."-".
    $tname = $_FILES["file"]["tmp_name"];

// $uploads_dir = 'images/';

    move_uploaded_file($tname,'upload/'.$pname); // .'/'.$pname
    $sql = "INSERT INTO fileup(title, img) VALUES('$title','$pname')";

    mysqli_query($con, $sql);

//Till here


    $id = $_SESSION['auth_user']['user_id'];
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobileno = mysqli_real_escape_string($con, $_POST['mobileno']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $branch = mysqli_real_escape_string($con, $_POST['branch']);
    $religion = mysqli_real_escape_string($con, $_POST['religion']);
    $caste = mysqli_real_escape_string($con, $_POST['caste']);
    $seat = mysqli_real_escape_string($con, $_POST['seat']);

    // $class = mysqli_real_escape_string($con, $_POST['class']); 

    $query_personal = "INSERT INTO personal_details (u_ID,u_name,u_dob,u_email,u_mobileno,u_gender,u_branch,u_religion,u_caste,u_seat) VALUES ('$id','$name','$dob','$email','$mobileno','$gender','$branch','$religion','$caste','$seat')";

    $address_type = mysqli_real_escape_string($con, $_POST['address_type']);
    $nationality = mysqli_real_escape_string($con, $_POST['nationality']);
    $state = mysqli_real_escape_string($con, $_POST['state']);
    $district = mysqli_real_escape_string($con, $_POST['district']);
    $area = mysqli_real_escape_string($con, $_POST['area']);
    $building_name = mysqli_real_escape_string($con, $_POST['building_name']);

    $query_address = "INSERT INTO address_details (address_id,address_type,nationality,state,district,area,building_name) VALUES ('$id','$address_type','$nationality','$state','$district','$area','$building_name')";

    $father_name = mysqli_real_escape_string($con, $_POST['father_name']);
    $mother_name = mysqli_real_escape_string($con, $_POST['mother_name']);
    $sibblings_no = mysqli_real_escape_string($con, $_POST['sibblings_no']);
    $father_contact = mysqli_real_escape_string($con, $_POST['father_contact']);
    $mother_contact = mysqli_real_escape_string($con, $_POST['mother_contact']);
    $telephone = mysqli_real_escape_string($con, $_POST['telephone']);
    $father_designation = mysqli_real_escape_string($con, $_POST['father_designation']);
    $mother_designation = mysqli_real_escape_string($con, $_POST['mother_designation']);
    $parents_email = mysqli_real_escape_string($con, $_POST['parents_email']);
    $father_income = mysqli_real_escape_string($con, $_POST['father_income']);
    $mother_income = mysqli_real_escape_string($con, $_POST['mother_income']);
    $domicile = mysqli_real_escape_string($con, $_POST['domicile']);

    $query_family = "INSERT INTO family_details (family_id,father_name,mother_name,sibblings_no,father_contact,mother_contact,telephone,father_designation,mother_designation,parents_email,father_income,mother_income,domicile) VALUES ('$id','$father_name','$mother_name','$sibblings_no','$father_contact','$mother_contact','$telephone','$father_designation','$mother_designation','$parents_email','$father_income','$mother_income','$domicile')";

    $query_run = mysqli_query($con, $query_personal);
    $query_run_add = mysqli_query($con, $query_address);
    $query_run_fam = mysqli_query($con, $query_family);

    if($query_run)
    {
        $_SESSION['auth_app'] = "filled";
        $_SESSION['message'] = "Your form is submitted sucessfully!";
        header("Location: http://localhost/AdmissionPortal/home_page.php");
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