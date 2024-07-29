<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Quintessential&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/adminstyle.css">
</head>
<body>
<img class="logo" src="../images/2.png" style="width: 75px; height:75px;">
    <a class="navbar-brand" href="#">E-Student</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="container-fluid mb-5" style="margin-top: 5px;">
        <div class="row">
            <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="adminDashboard.php" class="nav-link"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a href="teacher.php" class="nav-link"><i class="fas fa-chalkboard-teacher"></i>Teachers</a>
                        </li>
                        <li class="nav-item">
                            <a href="student.php" class="nav-link"><i class="fas fa-user"></i>Students</a>
                        </li>
                        <li class="nav-item">
                            <a href="adminChangePass.php" class="nav-link"><i class="fas fa-key"></i>Change Password</a>
                        </li>
                        <li class="nav-item">
                            <a href="../logout.php" class="nav-link"><i class="fas fa-sign-out-alt"></i>Log Out</a>
                        </li>
                        <li class="nav-item">
                            <a href="../index.php" class="nav-link">
                                <i class="fas fa-house-user"></i>
                                Home
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>