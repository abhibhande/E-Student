<?php

if(!isset($_SESSION))
{
    session_start();
}
include('./stuInclude/header.php');
include_once('../dbconnection.php');

if(isset($_SESSION['is_login']))
{
    $stuEmail = $_SESSION['studentLogEmail'];
}
else
{
    echo "<script> location.href = '../index.php';</script>";
}
if(isset($_REQUEST['stuPassUpdateBtn']))
{
    if(($_REQUEST['stuNewPass'] == ""))
    {
        $passmsg = '<div class="alert alert-warning col-sm-6 mt-2 mx-5" role="alert">All Fields Required</div>';
    }
    else
    {
        $sql = "SELECT * FROM student WHERE stu_email = '$stuEmail'";
        $result = $conn->query($sql);
        if($result->num_rows == 1)
        {
            $stuPass = $_REQUEST['stuNewPass'];
            $sql ="UPDATE student SET stu_pass = '$stuPass' WHERE stu_email = '$stuEmail'";
        }
        if($conn->query($sql) == TRUE)
        {
            $passmsg = '<div class="alert alert-success col-sm-6 mt-2 mx-5" role="alert">Password Updated Successfully</div>';
        }
        else
        {
            $passmsg = '<div class="alert alert-danger col-sm-6 mt-2 mx-5" role="alert">Unable to Update Password.</div>';
        }
    }
}
?>

<div class="col-sm-9 col-md-10">
    <div class="row">
        <div class="col-sm-6">
            <form action="" method="POST"  class="mt-5 mx-5">
                <div class="form-group">
                    <label for="inputEmail"><i><b>E-MAIL</b></i></label>
                    <input type="email" class="form-control" id="inputEmail" value="<?php
                        echo $stuEmail;
                    ?>" readonly>
                </div>
                <div class="form-group mt-2">
                    <label for="inputnewpassword"><i><b>NEW PASSWORD</b></i></label>
                    <input type="password" class="form-control" id="inputnewpassword" placeholder="New Password" name="stuNewPass">
                </div>
                <button type="submit" class="btn btn-outline-primary mx-4 mt-4" name="stuPassUpdateBtn">UPDATE</button>
                <button type="reset" class="btn btn-outline-secondary mt-4">RESET</button>
                <?php
                    if(isset($passmsg))
                    {
                        echo $passmsg;
                    }
                    ?>
            </form>
        </div>
    </div>
</div>






<?php
include('./stuInclude/footer.php');
?>