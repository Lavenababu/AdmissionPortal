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
  <link rel="stylesheet" href="./style.css?v=6">
</head>
<body>
  <?php/* require 'partials/_nav.php' */?>
  <?php include ('partials/_message.php'); ?>
    <div id="login-form">
      <h2>Registration</h2>

      <form id="form" name="form" action="partials/_code.php" method="POST">
        
          <!-- <p>    
          <label for="username">Username</label>
          <input type="text" id="name" name="name" placeholder="Name" required><i class="validation"><span></span><span></span></i><br><br>
          <input type="text" id="email" name="email" placeholder="Email" required><i class="validation"><span></span><span></span></i><br><br>
          <input type="text" id="username" name="username" placeholder="Username" required><i class="validation"><span></span><span></span></i><br><br>
          <input type="password" id="pass" name="pass" placeholder="Password" required><i class="validation"><span></span><span></span></i><br><br>
          <input type="password" id="c_pass" name="c_pass" placeholder="Comfirm Password" required><i class="validation"><span></span><span></span></i>
          </p> -->

          <div class="form-control">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="example@email.com" required><i class="validation"></i>
          </div>

          <div class="form-control">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="User123" required><i class="validation"></i>
          </div>

          <div class="form-control">
            <label for="password">Password</label>
            <input type="password" id="pass" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Password" required><i class="validation"></i>
            <div id="message">
              <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
              <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
              <p id="number" class="invalid">A <b>number</b></p>
              <p id="length" class="invalid">Minimum <b>8 characters</b></p>
            </div>
          </div>

          <div class="form-control">
          <label for="c_password">Confirm Password</label>
          <input type="password" id="c_pass" name="c_pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Password" required><i class="validation"></i>
          </div>

        </p>
          <p>
          <input type="submit" id="register" name="register_student" value="Register">
          <!-- <button class="submit" id="register" name="register_student" value="Register">
            <span onclick="checkInputs()">Submit</span>
          </button> -->

          <div id="back">
            <p><a href="./login.php" style="text-decoration: none;">Back to Login</a></p><br><br>
          </div>
        </p>
      </form>
    </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  <script src="register_script.js"></script>

</body>
</html>