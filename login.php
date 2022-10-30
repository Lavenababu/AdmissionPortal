<?php 
  session_start();
  include 'partials/_dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="./style.css?v2">
</head>
<body>
  <?php/* require 'partials/_nav.php' */?>
  <?php include ('partials/_message.php'); ?>
    <div id="login-form">
        <h2>Sign In</h2>
        <form id="form" action="partials/_code.php" method="POST">

          <p>
          <input type="email" id="email" name="email" placeholder="Email" required><i class="validation"><span></span><span></span></i><br><br>
          <input type="password" id="password" name="password" placeholder="Password" required><i class="validation"></i></p>

          <div id="forgot-pass">
            <p><a href="#" style="text-decoration: none;">Forgot Password?</a></p>
          </div>

          <p>
          <input type="submit" name="login" id="login" value="Login">
          </p>
          
        </form>
        <div id="create-acc">
          <p style="text-align: center;">Don't have an account? <a href="./register.php">Register here</a><p>
        </div>
        <!-- <p>
        <input type="submit" id="admin-login" value="Admin Login">
        </p> -->
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>