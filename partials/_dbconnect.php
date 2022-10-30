<?php
$server = "localhost"; //3308
$username = "root";
$password = "";
$database = "admission_portal";

$con = mysqli_connect($server, $username, $password, $database);
    if (!$con){
        die("Error". mysqli_connect_error());
}

// if(isset($_POST['submit'])){
//     $fileCount = count($_FILES['file']['name']);
//     for($i=0;$i<$fileCount;$i++){
//         $fileName = $_FILES['file']['name'][$i];
//         $sql= "INSERT INTO fileup(title, img) VALUES('$fileName', '$fileName')";
        
//         if(mysqli_query($con, $sql)){
//             echo "File Uploaded Successfully";
//         }else{
//             echo "ERROR";
//         }
//         move_uploaded_file($_FILES['file']['tmp_name'][$i], 'upload/'.$fileName);
//     }
// }

?>


<!-- form_btn -->