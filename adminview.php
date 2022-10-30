<?php
require 'partials/_dbconnect.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin View</title>
    <link rel="stylesheet" href="admin_style.css?v4">
    <!-- <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'> -->
</head>

<body>
    <?php include('partials/_message.php'); ?>
    <!-- navbar -->
<div class="sidebar">
    <h2>&nbsp;Admission Portal</h2>
    <a href="admin_dashboard.php">Dashboard</a>
    <a class="active" href="#">Views</a>
    <a href="#about">Logout</a>
</div>
<!-- end of navbar  -->

<div class="content">

    <div id="admin">
        <h2 style="text-align:center;">List of Registered Students</h2>
        <a href="home_page.php" class="btn back-btn">&laquo; Back</a>

        <table class="table-style">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Admission Form</th>
                    <th>Operations</th>
                    <!-- <th>Branch</th> -->
                    <!-- <th>Application</th> -->
                </tr>
            </thead>
            <tbody>
                <?php
                $query = "SELECT * FROM users";
                $query_run = mysqli_query($con, $query);

                if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $student) {
                ?>
                        <tr>
                            <td><?= $student['u_ID']; ?></td>
                            <td><?= $student['u_name']; ?></td>
                            <td><?= $student['u_email']; ?></td>
                            <td><?= $student['u_username']; ?></td>
                            <td><?= $student['u_application']; ?></td>
                            <td>
                                <a href="student_view.php?id=<?= $student['u_ID']; ?>" class="btn view-btn">View</a>
                                <a href="student_view.php?id=<?= $student['u_ID']; ?>" class="btn delete-btn">Delete</a>
                                <a href="student-view.php?id=<?= $student['u_ID']; ?>" class="btn update-btn">Update</a>
                            </td>

                        </tr>
                <?php
                    }
                } else {
                    echo "<h5> No Record Found </h5>";
                }
                ?>

                </tr>
            </tbody>
        </table><br><br>
    </div>
            </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script> -->
</body>

</html>


