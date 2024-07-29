<?php

include_once('../dbconnection.php');

if(!isset($_SESSION))
{
    session_start();
}
if(isset($_SESSION['is_login']))
{
    $studentLogEmail = $_SESSION['studentLogEmail'];
}

if(isset($studentLogEmail))
{
    $sql = "SELECT stu_img FROM student WHERE stu_email = '$studentLogEmail'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $stu_img = $row['stu_img'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Quintessential&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../css/stustyle.css">

</head>
<body>
<img class="logo" src="../images/2.png" style="width: 75px; height:75px;">
    <a class="navbar-brand" href="#">E-Student</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container-fluid mb-5" style="margin-top: 40px;">
        <div class="row">
            <nav class="col-sm-2 bg-light sidebar py-5 d-print-none">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item mb-3">
                            <img src="<?php echo $stu_img ?>" alt="studentimage" class=" img-thumbnail rounded-circle" >
                        </li>
                        <li class="nav-item">
                            <a href="studentProfile.php" class="nav-link">
                            <i class="fas fa-user"></i>
                            PROFILE 
                            <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a href="stufeedback.php" class="nav-link">
                                <i class="fas fa-comment"></i>
                                FEEDBACK
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="studentChangePass.php" class="nav-link">
                                <i class="fas fa-key"></i>
                                CHANGE PASSWORD
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../logout.php" class="nav-link">
                                <i class="fas fa-sign-out-alt"></i>
                                LOG OUT
                            </a>
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
        