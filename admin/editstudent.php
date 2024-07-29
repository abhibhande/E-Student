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

    if(isset($_REQUEST['requpdate']))
    {
        if(($_REQUEST['stu_id'] == "") || ($_REQUEST['stu_name'] == "") || ($_REQUEST['stu_email'] == "") || ($_REQUEST['stu_pass'] == "") || ($_REQUEST['stu_occ'] == ""))
        {
            $msg = '<div class="alert alert-warning col-sm-6 mx-5 mt-2">All Fields Required</div>';
        }else{
            $sid = $_REQUEST['stu_id'];
            $sname = $_REQUEST['stu_name'];
            $semail = $_REQUEST['stu_email'];
            $spass = $_REQUEST['stu_pass'];
            $socc = $_REQUEST['stu_occ'];

            $sql = "UPDATE student SET stu_id = '$sid', stu_name = '$sname', stu_email = '$semail', stu_pass = '$spass', stu_occ = '$socc' WHERE stu_id = '$sid'";

            if($conn->query($sql) == TRUE)
            {
                $msg ='<div class="alert alert-success col-sm-6 mx-5 mt-2" role="alert">Student Updated Successfully</div>';
            }else{
                $msg ='<div class="alert alert-danger col-sm-6 mx-5 mt-2" role="alert">Unable to Update</div>';
            }
        }
    }
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron bg-gradient px-5">
    <h3 class="text-center"><i>Update Student Details</i></h3>

    <?php 
        if(isset($_REQUEST['view']))
        {
            $sql = "SELECT * FROM student WHERE stu_id = {$_REQUEST['id']}";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
        }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group mb-2">
            <label for="stu_id"><b>Student ID</b></label>
            <input type="text" class="form-control" id="stu_id" name="stu_id" value="<?php
                if(isset($row['stu_id']))
                {
                    echo $row['stu_id'];
                }
            ?>" readonly>
        <div class="form-group mb-2">
            <label for="stu_name"><b>Name</b></label>
            <input type="text" class="form-control" id="stu_name" name="stu_name" value="<?php
                if(isset($row['stu_name']))
                {
                    echo $row['stu_name'];
                }
            ?>">
        </div>
        <div class="form-group mb-2">
            <label for="stu_email"><b>E-Mail</b></label>
            <input type="text" class="form-control" id="stu_email" name="stu_email" value="<?php
                if(isset($row['stu_email']))
                {
                    echo $row['stu_email'];
                }
            ?>">
        </div>
        <div class="form-group mb-2">
            <label for="stu_pass"><b>Password</b></label>
            <input type="password" class="form-control" id="stu_pass" name="stu_pass" value="<?php
                if(isset($row['stu_pass']))
                {
                    echo $row['stu_pass'];
                }
            ?>">
        </div>
        <div class="form-group mb-2">
            <label for="stu_occ"><b>Occupation</b></label>
            <input type="text" class="form-control" id="stu_occ" name="stu_occ" value="<?php
                if(isset($row['stu_occ']))
                {
                    echo $row['stu_occ'];
                }
            ?>">
        </div>
        <div class="text-center mb-2">
            <button type="submit" class=" btn btn-outline-primary" id="requpdate" name="requpdate">Submit</button>
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