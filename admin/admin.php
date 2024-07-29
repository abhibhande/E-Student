<?php
    if(!isset($_SESSION))
    {
        session_start();
    }
    include_once('../dbconnection.php');


if(!isset($_SESSION['is_admin_login'])){
if(isset($_POST['checkLogemail']) && isset($_POST['adminLogEmail']) && isset($_POST['adminLogPass']))
{
    $adminLogEmail = $_POST['adminLogEmail'];
    $adminLogPass = $_POST['adminLogPass'];

    //To Prevent from SQL Injection
    $adminLogEmail = stripcslashes($adminLogEmail);
    $adminLogPass = stripcslashes($adminLogPass);
    $adminLogEmail = mysqli_real_escape_string($conn, $adminLogEmail);
    $adminLogPass = mysqli_real_escape_string($conn, $adminLogPass);

    $sql = "SELECT admin_email, admin_pass FROM admin WHERE admin_email = '".$adminLogEmail."' AND admin_pass= '".$adminLogPass."'";

    $result = $conn->query($sql);
    
    $row = $result->num_rows;

    if($row === 1)
    {
        $_SESSION['is_admin_login'] = true;
        $_SESSION['adminLogEmail'] = $adminLogEmail;
        echo json_encode($row);
    } else if($row === 0)
    {
        echo json_encode($row);
    }
}
}
?>