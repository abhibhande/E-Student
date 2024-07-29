<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!--font awesome-->
    <link rel="stylesheet" href="css/all.min.css">
    <!--Google font-->
    <link href="https://fonts.googleapis.com/css2?family=Quintessential&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://themes.audemedia.com/html/goodgrowth/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Header</title>
</head>
<body>
<nav class="navbar navbar-expand-lg  navbar-light fixed-top navbar-s pt-3">
  <div class="container-fluid">
    <img class="logo" src="images/2.png" style="width: 75px; height:75px;">
    <a class="navbar-brand" href="#">E-Student</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item custom-nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="faculty.php">Faculty</a>
        </li>
        <!-- <li class="nav-item custom-nav-item">
          <a class="nav-link" href="clubs.php">Clubs</a>
        </li> -->
        <li class="nav-item dropdown custom-nav-item">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             Academics
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="http://www.pccoepune.com/pdf/calendars/2023-24/FY-BTech-MTech-MCA-Academic-Calendar-2023-24.pdf" >Academic Calender</a></li>
            <li><a class="dropdown-item" href="tt.php">Time Table</a></li>
            <li><a class="dropdown-item" href="ETT.php"> Exam Time Table</a></li>
          </ul>
        </li>
        <?php 
          session_start();
          if(isset($_SESSION['is_login']))
          {
            echo '<li class="nav-item custom-nav-item"><a href="Student/studentProfile.php" class="nav-link"><script src="https://cdn.lordicon.com/qjzruarw.js"></script>My Profile</a></li>
                  <li class="nav-item custom-nav-item"><a href="logout.php" class="nav-link"><script src="https://cdn.lordicon.com/qjzruarw.js"></script>Log Out</a></li>';
          }  else{
            echo '<li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#stuLoginModalCenter">Log in</a></li>
            <li class="nav-item custom-nav-item"><a href="#" class="nav-link" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter">Sign up</a></li>';
          }
        ?>
      </ul>
    </div>
  </div>
</nav>



