<?php
require 'partials/_dbconnect.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin View</title>
    <link rel="stylesheet" href="admin_style.css?v3">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'> -->
</head>

<body>
    <?php include('partials/_message.php'); ?>
    <!-- navbar -->
<div class="sidebar">
    <h2>&nbsp;Admission Portal</h2>
    <a class="active" href="#">Dashboard</a>
    <a href="adminview.php">Views</a>
    <a href="#about">Logout</a>
</div>
<!-- end of navbar  -->

<div class="content">
<!-- categories -->
<div class="home-content">

<h2>Welcome to Dashboard</h2>
  <hr><h2>Branch</h2>
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Information Technology</div>
            <?php 
                $it_count = "SELECT * FROM personal_details WHERE u_branch='Information Technology'";
                $it_count_run = mysqli_query($con, $it_count);

                if($it_category = mysqli_num_rows($it_count_run)){
                    echo '<div class="number">'.$it_category.'</div>';
                }else{
                    echo '<h2>0</h2>';
                }
            ?>
            <hr>
            <div class="indicator">
            <span class="text"><a href="adminview.php" style="text-decoration:none;">View Details&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span>
            <i class="fa fa-angle-right"></i>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="right-side">
            <div class="box-topic">Computer Science</div>
            <?php 
                $it_count = "SELECT * FROM personal_details WHERE u_branch='Computer Science'";
                $it_count_run = mysqli_query($con, $it_count);

                if($it_category = mysqli_num_rows($it_count_run)){
                    echo '<div class="number">'.$it_category.'</div>';
                }else{
                    echo '<h2>0</h2>';
                }
            ?>
            <hr>
            <div class="indicator">
            <span class="text"><a href="adminview.php" style="text-decoration:none;">View Details&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span>
            <i class="fa fa-angle-right"></i>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="right-side">
            <div class="box-topic">Electronics</div>
            <?php 
                $it_count = "SELECT * FROM personal_details WHERE u_branch='Electronics'";
                $it_count_run = mysqli_query($con, $it_count);

                if($it_category = mysqli_num_rows($it_count_run)){
                    echo '<div class="number">'.$it_category.'</div>';
                }else{
                    echo '<h2>0</h2>';
                }
            ?>
            <hr>
            <div class="indicator">
              <span class="text"><a href="adminview.php" style="text-decoration:none;">View Details&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span>
            <i class="fa fa-angle-right"></i>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="right-side">
            <div class="box-topic">Mechanical</div>
            <?php 
                $it_count = "SELECT * FROM personal_details WHERE u_branch='Mechanical'";
                $it_count_run = mysqli_query($con, $it_count);

                if($it_category = mysqli_num_rows($it_count_run)){
                    echo '<div class="number">'.$it_category.'</div>';
                }else{
                    echo '<h2>0</h2>';
                }
            ?>
            <hr>            
            <div class="indicator">
            <span class="text"><a href="adminview.php" style="text-decoration:none;">View Details&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span>
            <i class="fa fa-angle-right"></i>
            </div>
          </div>
      </div>
</div>
<br><br>
<hr>

<h2>Users</h2>
      <div class="overview-boxes2">
        
      <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Registered Users</div>
            <?php 
                $it_count = "SELECT * FROM users";
                $it_count_run = mysqli_query($con, $it_count);

                if($it_category = mysqli_num_rows($it_count_run)){
                    echo '<div class="number">'.$it_category.'</div>';
                }else{
                    echo '<h2>0</h2>';
                }
            ?>
            <hr>
            <div class="indicator">
              <span class="text"><a href="adminview.php" style="text-decoration:none;">View Details&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span>
            <i class="fa fa-angle-right"></i>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Filled Admission Form</div>
            <?php 
                $it_count = "SELECT * FROM users WHERE u_application='filled'";
                $it_count_run = mysqli_query($con, $it_count);

                if($it_category = mysqli_num_rows($it_count_run)){
                    echo '<div class="number">'.$it_category.'</div>';
                }else{
                    echo '<h2>0</h2>';
                }
            ?>
            <hr>
            <div class="indicator">
              <span class="text"><a href="adminview.php" style="text-decoration:none;">View Details&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span>
            <i class="fa fa-angle-right"></i>
            </div>
          </div>
        </div>

        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Unfilled Admission Form</div>
            <?php 
                $it_count = "SELECT * FROM users WHERE u_application IS NULL";
                $it_count_run = mysqli_query($con, $it_count);

                if($it_category = mysqli_num_rows($it_count_run)){
                    echo '<div class="number">'.$it_category.'</div>';
                }else{
                    echo '<h2>0</h2>';
                }
            ?>
            <hr>
            <div class="indicator">
              <span class="text"><a href="adminview.php" style="text-decoration:none;">View Details&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></span>
            <i class="fa fa-angle-right"></i>
            </div>
          </div>
        </div>

</div>
<br><br>
<hr>

</div>
<!-- end of categories -->
</div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script> -->
</body>

</html>
