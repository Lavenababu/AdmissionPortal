<?php
require 'partials/_dbconnect.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student details</title>
    <link rel="stylesheet" href="student_view_style.css?v3" />
    <!-- <link rel="stylesheet" href="admission_style.css"> -->
</head>

<body>
<?php
    // $id = $_SESSION['stud_id'];
    $query = "SELECT * FROM personal_details where u_ID='5'";
    // WHERE u_email="  "
    $query_run = mysqli_query($con, $query);

    if (mysqli_num_rows($query_run) > 0) {
        foreach ($query_run as $usertable) {
?>


    <div class="header">
        <h2>Student Information details</h2>
        <!-- <button>Back
            <a href=""></a>
        </button> -->
        <a href="adminview.php" class="btn back-btn">&laquo; Back</a>
    </div>
    <div class="container">
        <!-- Container with photo and name -->
        <div class="top-container">
            <img src="team-1.jpg" alt="photo" class="photo" />
            <hr width="80%" />
            <br />
            <h2 class="fullname">Name: <?= $usertable['u_name']; ?></h2>
            <br />
            <hr width="80%" />
            <br />
            <h3>D.O.B: <?= $usertable['u_dob']; ?></h3>
        </div>

        <!-- Container with personal details -->
        <div class="info-container">
            <form>
                <div class="details">
                    <span class="title">
                        <h2>Personal Details</h2>
                    </span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Email</label>
                            <input type="email" name="email" value="<?= $usertable['u_email']; ?>" disabled>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" name="mobileno" value="<?= $usertable['u_mobileno']; ?>" disabled>
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <input type="text" name="gender" value="<?= $usertable['u_gender']; ?>" disabled>
                        </div>

                        <div class="input-field">
                            <label>Branch</label>
                            <input type="text" name="branch" value="<?= $usertable['u_branch']; ?>" disabled>
                        </div>
                        <div class="input-field">
                            <label>Religion</label>
                            <input type="text" name="religion" value="<?= $usertable['u_religion']; ?>" disabled>
                        </div>
                        <div class="input-field">
                            <label>Caste</label>
                            <input type="text" name="caste" value="<?= $usertable['u_caste']; ?>" disabled>
                        </div>
                        <div class="input-field">
                            <label>Seat Type</label>
                            <input type="text" name="seat" value="<?= $usertable['u_seat']; ?>" disabled>
                        </div>


                        <?php }
                            }
                            $query = "SELECT * FROM family_details where family_id='5'";
                            $query_run = mysqli_query($con, $query);
                            if (mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $usertable) {
                        ?>
                        <div class="input-field">
                            <label>No. of Siblings</label>
                            <input type="text" name="sibblings_no" value="<?= $usertable['sibblings_no']; ?>" disabled>
                        </div>
                        <div class="input-field">
                            <label>Father's Name</label>
                            <input type="text" name="fname" value="<?= $usertable['father_name']; ?>" disabled>
                        </div>
                        <div class="input-field">
                            <label>Mother's Name</label>
                            <input type="text" name="mname" value="<?= $usertable['mother_name']; ?>" disabled>
                        </div>
                        <div class="input-field">
                            <label>Father's Number</label>
                            <input type="text" name="mobilenumber" value="<?= $usertable['father_contact']; ?>" disabled>
                        </div>
                        <div class="input-field">
                            <label>Mother's Number</label>
                            <input type="text" name="mobilenumber" value="<?= $usertable['father_contact']; ?>" disabled>
                        </div>
                        <div class="input-field">
                            <label>Father's Designation</label>
                            <input type="text" name="sibblings_no" value="<?= $usertable['father_designation']; ?>" disabled>
                        </div>
                        <div class="input-field">
                            <label>Mother's Designation </label>
                            <input type="text" name="sibblings_no" value="<?= $usertable['mother_designation']; ?>" disabled>
                        </div>
                        <div class="input-field">
                            <label>Telephone</label>
                            <input type="text" name="sibblings_no" value="<?= $usertable['telephone']; ?>" disabled>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <?php }
        }
            $query = "SELECT * FROM address_details where address_id='5'";
            $query_run = mysqli_query($con, $query);
            if (mysqli_num_rows($query_run) > 0) {
                foreach ($query_run as $usertable) {?>

        <!-- Other details container -->
        <div class="other-details">
            <form>
                <span class="title">
                    <h2>Other Details</h2>
                </span>
                <br>
                <!-- Address details -->
                <span class="title">
                    <h3>Address Details</h3>
                </span>
                <div class="fields">
                    <div class="input-detail">
                        <label>State</label>
                        <input type="text" value="<?= $usertable['state']; ?>" disabled>
                    </div>
                    <div class="input-detail">
                        <label>District</label>
                        <input type="text" value="<?= $usertable['district']; ?>" disabled>
                    </div>
                    <div class="input-detail">
                        <label>Area</label>
                        <input type="text" value="<?= $usertable['area']; ?>" disabled>
                    </div>
                </div>
                <?php }}?>
                <!-- All file related to admission -->
                <div class="indentity">
                    <span class="title">
                        <h3>Indentification details</h3>
                    </span>
                    <div class="fields">
                        <div class="input-file">
                            <label>Student's detail</label>
                            <button>
                            <a href="partials\upload\IT_OralPracticalOct_2022.pdf" class="doc">View</a>
                            </button>
                        </div>
                        <div class="input-file">
                            <label>Parent's details</label>
                            <button>View</button>
                        </div>
                    </div>
                    <!-- <div class="fields">
                        <div class="input-file">
                            <label>Student's detail</label>
                            <button>View</button>
                        </div>
                        <div class="input-file">
                            <label>student's details</label>
                            <button>View</button>
                        </div>
                        <div class="input-file">
                            <label>Parent's details</label>
                            <button>View</button>
                        </div>
                    </div> -->
                </div>
            </form>
        </div>
    </div>
    <?php
        
    // } else{
    //     echo "<h5>Student has not filled the admission form</h5>";
    // }
    ?>
</body>

</html>