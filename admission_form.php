<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="admission_style.css?v3">

    <title>Addmission Form </title> 
</head>
<body>
<?php include ('partials/_message.php'); ?>
    <div class="container">
        <header>Admission form</header>

        <form action="partials/_code.php" method="POST">

            <!-- Progress Bar -->
            <!-- <div class="progressbar">
                <div class="progress" id="progress"></div>
                <div class="progress-step progress-step-active" data-title="Part1"></div>
                <div class="progress-step" data-title="Part2"></div>
                <div class="progress-step" data-title="Part3"></div>
                <div class="progress-step" data-title="Part4"></div>
            </div> -->
            <!-- End of Progress Bar -->

            <div class="form first form-step-active">
                <div class="details personal">
                    <span class="title">Personal Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Full Name</label>
                            <input type="text" name="name" placeholder="Enter your name" required>
                        </div>

                        <div class="input-field">
                            <label>Date of Birth</label>
                            <input type="date" name="dob" placeholder="Enter birth date" required>
                        </div>

                        <div class="input-field">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="Enter your email" required>
                        </div>

                        <div class="input-field">
                            <label>Mobile Number</label>
                            <input type="number" name="mobileno" placeholder="Enter mobile number" required>
                        </div>

                        <div class="input-field">
                            <label>Gender</label>
                            <select name="gender" required>
                                <option disabled selected>Select gender</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Class</label>
                            <input type="text" name="class" placeholder="Enter your class/standard" required>
                        </div>
                    </div>
                </div>

                <div class="stu details ID">
                    <span class="title">Student Identity Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>ID Type</label>
                            <select required>
                                <option disabled selected>Select ID Type</option>
                                <option>Birth Certificate</option>
                                <option>Aadhar Card</option>
                                <option>Others</option>
                            </select>
                        </div>
                        

                        <div class="input-field">
                            <label>Upload Your Document</label>
                                <input class="upload-doc" type="file" required>
                        </div>

                        <div class="input-field">
                            <label>Upload Your Photo</label>
                                <input class="upload-doc" type="file" required>
                        </div>
                    </div>

                    <span class="title">Parent/Gaurdian Identity Details</span>
                    <div class="fields">
                        <div class="input-field">
                            <label>ID Type</label>
                            <select required>
                                <option disabled selected>Select ID Type</option>
                                <option>Birth Certificate</option>
                                <option>Aadhar Card</option>
                                <option>Others</option>
                            </select>
                        </div>
                        
                        <div class="input-field">
                            <label>Upload Your Document</label>
                                <input class="upload-doc" type="file" required>
                        </div>
                        <div class="input-field">
                            <label>Upload Your Photo</label>
                                <input class="upload-doc" type="file" required>
                        </div>
                    </div>

                    <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div> 
            </div>

            <div class="form second">
                <div class="details address">
                    <span class="title">Address Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Address Type</label>
                            <select name="address_type">
                                <option value="" disabled selected>Type of address</option>
                                <option value="">Permanent</option>
                                <option value="">Temporary</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <label>Nationality</label>
                            <input type="text" name="nationality" placeholder="Enter nationality" required>
                        </div>

                        <div class="input-field">
                            <label>State</label>
                            <input type="text" name="state" placeholder="Enter your state" required>
                        </div>

                        <div class="input-field">
                            <label>District</label>
                            <input type="text" name="district" placeholder="Enter your district" required>
                        </div>

                        <div class="input-field">
                            <label>Area</label>
                            <input type="text" name="area" placeholder="Enter your area" required>
                        </div>

                        <div class="input-field">
                            <label>Building Name</label>
                            <input type="text" name="building_name" placeholder="Enter Building name" required>
                        </div>
                    </div>
                </div>

                <div class="details family">
                    <span class="title">Family Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Father Name</label>
                            <input type="text" name="father_name" placeholder="Enter father name" required>
                        </div>

                        <div class="input-field">
                            <label>Mother Name</label>
                            <input type="text" name="mother_name" placeholder="Enter mother name" required>
                        </div>

                        <div class="input-field">
                            <label>Number of Siblings</label>
                            <input type="number" name="sibblings_no" placeholder="Enter no. of Siblings" required>
                        </div>

                        <div class="input-field">
                            <label>Father's Mobile Number</label>
                            <input type="number" name="father_contact" placeholder="Enter father's mobile number" >
                        </div>

                        <div class="input-field">
                            <label>Mother's Mobile Number</label>
                            <input type="number" name="mother_contact" placeholder="Enter mother's mobile number">
                        </div>

                        <div class="input-field">
                            <label>Telephone Number</label>
                            <input type="number" name="telephone" placeholder="Enter telephone number">
                        </div>
                    </div>

                    <div class="buttons">
                        <div class="backBtn">
                            <span class="btnText">Back</span>
                        </div>
                        
                        <button class="submit" name="form_btn">
                            <span class="btnText" onclick="">Submit</span>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
    </div>

    <script src="script.js"></script>
</body>
</html>
