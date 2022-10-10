<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
      .navbar {
        height: 60px;
      }
    .sticky {
      position: fixed;
      top: 0;
      width: 100%;
      color: black;
    }
    .sticky + .content {
     padding-top: 60px;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light" id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="/AdmissionPortal">Admission Portal</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/AdmissionPortal/home_page.php">Home</a>
        </li>

        <?php if(isset($_SESSION['auth_user'])) : ?>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?= $_SESSION['auth_user']['username']; ?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">My Profile</a></li>
            <li>
              <form action="partials/_code.php" method="POST">
                <button type="submit" name="logout_btn" class="dropdown-item">Logout</button>
              </form>
            </li>
          </ul>
        </li>

        <!-- <li class="nav-item">
          <a class="nav-link" href="/AdmissionPortal/login.php">Login</a>
        </li>
        <li>
          <form action="partials/_code.php" method="POST">
            <button type="submit" name="logout_btn" class="nav-item">Logout</button>
          </form>
        </li> -->

        <?php else : ?>

        <li class="nav-item">
          <a class="nav-link" href="/AdmissionPortal/login.php">Login</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/AdmissionPortal/register.php">SignUp</a>
        </li>

        <?php endif; ?>

        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>

      </ul>

      <!-- <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->

    </div>
  </div>
</nav>

<script>
    // When the user scrolls the page, execute myFunction
    window.onscroll = function() {myFunction()};

    // Get the navbar
    var navbar = document.getElementById("navbar");

    // Get the offset position of the navbar
    var sticky = navbar.offsetTop;

    // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }
  </script>
  </body>