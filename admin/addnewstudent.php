<?php 

if(!isset($_SESSION))
    {
        session_start();
    }
    include('./adminMainInclude/header.php');
    include('../dbconnection.php');

    if(isset($_SESSION['is_admin_login']))
    {
        $adminEmail = $_SESSION['adminLogEmail'];
    }else{
        echo "<script> location.href = '../index.php';</script>";
    }

    if(isset($_REQUEST['newStuSubmitBtn'])){
        if(($_REQUEST['stu_name'] == "") || ($_REQUEST['stu_email'] == "") || ($_REQUEST['stu_pass'] == "") || ($_REQUEST['stu_occ'] == ""))
        {
            $msg = '<div class="alert alert-warning col-sm-6 mx-5 mt-2">All Fields Required</div>';
        }else{
            $stu_name = $_REQUEST['stu_name'];
            $stu_email = $_REQUEST['stu_email'];
            $stu_pass = $_REQUEST['stu_pass'];
            $stu_occ = $_REQUEST['stu_occ'];

            $sql = "INSERT INTO student (stu_name, stu_email, stu_pass, stu_occ) VALUES ('$stu_name', '$stu_email', '$stu_pass', '$stu_occ')";

            if($conn->query($sql) == TRUE)
            {
                $msg = '<div class="alert alert-success col-sm-6 mx-5 mt-2">Student Added Succesfully</div>';
            }
            else{
                $msg = '<div class="alert alert-danger col-sm-6 mx-5 mt-2">Unable to Add Student.</div>';
            }
        }
    }
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron bg-gradient px-5">
    <h3 class="text-center"><i>Add New Student</i></h3>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group mb-2">
            <label for="stu_name"><b>Name</b></label>
            <input type="text" class="form-control" id="stu_name" name="stu_name">
        </div>
        <div class="form-group mb-2">
            <label for="stu_email"><b>E-Mail</b></label>
            <input type="text" class="form-control" id="stu_email" name="stu_email">
        </div>
        <div class="form-group mb-2">
            <label for="stu_pass"><b>Password</b></label>
            <input type="password" class="form-control" id="stu_pass" name="stu_pass">
        </div>
        <div class="form-group mb-2">
            <label for="stu_occ"><b>Occupation</b></label>
            <input type="text" class="form-control" id="stu_occ" name="stu_occ">
        </div>
        <div class="text-center mb-2">
            <button type="submit" class=" btn btn-outline-primary" id="newStuSubmitBtn" name="newStuSubmitBtn">Submit</button>
            <a href="student.php" class="btn btn-outline-secondary">Close</a>
        </div>
        <?php
        if(isset($msg))
        {
            echo $msg;
        }
        ?>
    </form>
</div>


<?php 
    include('./adminMainInclude/footer.php');
?>