<?php
    require 'partials/_dbconnect.php'
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>HTML5 Login Form with validation Example</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="./admin_style.css?v=7">
</head>
<body> 
    <?php/* require 'partials/_nav.php' */?>  
    <?php include ('partials/_message.php'); ?>
    <div id="admin">
    
        <a href="login.php" class="next">&laquo; Back</a>
        <h2>Admin Panel</h2>

        <table class="table-style">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $query = "SELECT * FROM users";
                    $query_run = mysqli_query($con, $query);

                    if(mysqli_num_rows($query_run) > 0)
                    {
                        foreach($query_run as $usertable)
                        {
                            ?>
                            <tr>
                                <td><?= $usertable['ID']; ?></td>
                                <td><?= $usertable['name']; ?></td>
                                <td><?= $usertable['email']; ?></td>
                                <td><?= $usertable['username']; ?></td>
                                <td><?= $usertable['password']; ?></td>
                                <td>
                                    <a href="student-view.php?id=<?= $usertable['ID']; ?>" class="btn btn-info btn-sm">View</a>
                                </td>
                                
                            </tr>
                            <?php
                        }
                    }
                    else{
                        echo "<h5> No Record Found </h5>";
                    }
                ?>

                </tr>
            </tbody>
        </table><br><br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>


