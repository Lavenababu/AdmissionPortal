<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Registration Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="./style.css?v=2">
</head>
<body>
  <?php/* require 'partials/_nav.php' */?>
  <?php include ('partials/_message.php'); ?>
    <div id="login-form">
        <h2>Registration</h2>
        <form id="form" action="partials/_code.php" method="POST">
          <p>
          <input type="text" id="name" name="name" placeholder="Name" required><i class="validation"><span></span><span></span></i><br><br>
          <input type="text" id="email" name="email" placeholder="Email" required><i class="validation"><span></span><span></span></i><br><br>
          <input type="text" id="username" name="username" placeholder="Username" required><i class="validation"><span></span><span></span></i><br><br>
          <input type="password" id="pass" name="pass" placeholder="Password" required><i class="validation"><span></span><span></span></i><br><br>
          <input type="password" id="c_pass" name="c_pass" placeholder="Comfirm Password" required><i class="validation"><span></span><span></span></i>
          </p>
          <p>
          <input type="submit" id="register" name="register_student" value="Register">
          <div id="back">
            <p><a href="./login.php" style="text-decoration: none;">Back to Login</a></p><br><br>
          </div>
          </p>
        </form>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>