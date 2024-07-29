<?php
if(!isset($_SESSION))
{
    session_start();
}
include_once('../dbconnection.php');
if(isset($_POST['checkemail']) && isset($_POST['stuemail']))
{
    $stuemail = $_POST['stuemail'];
    $sql = "SELECT stu_email FROM student WHERE stu_email = '".$stuemail."'";

    $result = $conn->query($sql);

    $row = $result->num_rows;
    echo json_encode($row);
}

if(isset($_POST['stusignup']) && isset($_POST['stuname']) && isset($_POST['stuemail']) && isset($_POST['stupass']) )
{
    $stuname = $_POST['stuname'];
    $stuemail = $_POST['stuemail'];
    $stupass = $_POST['stupass'];

    $sql = "INSERT INTO student(stu_name,stu_email,stu_pass) VALUES ('$stuname','$stuemail','$stupass')";

    if($conn->query($sql) == TRUE)
    {
        echo json_encode("OK");
    }else{
        echo json_encode("Failed");
    }
}


//Student Login
if(!isset($_SESSION['is_login'])){
    if(isset($_POST['checkLogemail']) && isset($_POST['studentLogEmail']) && isset($_POST['studentLogPass']))
    {
        $studentLogEmail = $_POST['studentLogEmail'];
        $studentLogPass = $_POST['studentLogPass'];

        // To Prevent from SQL Injection
        $studentLogEmail = stripcslashes($studentLogEmail);
        $studentLogPass = stripcslashes($studentLogPass);
        $studentLogEmail = mysqli_real_escape_string($conn, $studentLogEmail);
        $studentLogPass = mysqli_real_escape_string($conn, $studentLogPass);

        $sql = "SELECT stu_email, stu_pass FROM student WHERE stu_email = '".$studentLogEmail."' AND stu_pass= '".$studentLogPass."'";

        $result = $conn->query($sql);
        
        $row = $result->num_rows;

        if($row === 1)
        {
            $_SESSION['is_login'] = true;
            $_SESSION['studentLogEmail'] = $studentLogEmail;
            echo json_encode($row);
        } else if($row === 0)
        {
            echo json_encode($row);
        }
    }
}
?>