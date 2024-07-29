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

    $adminEmail = $_SESSION['adminLogEmail'];
    if(isset($_REQUEST['adminPassUpdatebtn']))
    {
        if(($_REQUEST['adminPass'] == ""))
        {
            $passmsg = '<div class="alert alert-warning col-sm-6 mx-5 mt-2">All Fields Required</div>';
        }else{
            $sql = "SELECT * FROM admin WHERE admin_email = '$adminEmail'";
            $result = $conn->query($sql);
            if($result->num_rows == 1)
            {
                $adminPass = $_REQUEST['adminPass'];
                $sql = "UPDATE admin SET admin_pass = '$adminPass' WHERE admin_email = '$adminEmail'";
                if($conn->query($sql) == TRUE)
                {
                    $passmsg = '<div class="alert alert-success col-sm-6 mx-5 mt-2">Updated Successfully</div>';
                }
            }
        }
    }
?>
<div class="col-sm-9 mt-5">
    <div class="row">
        <div class="col-sm-6">
            <form class="mt-5 mx-5">
                <div class="form-group">
                    <label for="inputEmail"><b>E-MAIL</b></label>
                    <input type="email" class="form-control" id="inputEmail" value="<?php
                        echo $adminEmail;
                    ?>" readonly>
                </div>
                <div class="form-group mt-2">
                    <label for="inputnewpassword"><b>NEW PASSWORD</b></label>
                    <input type="password" class="form-control" id="inputnewpassword" placeholder="New Password" name="adminPass">
                </div>
                <button type="submit" class="btn btn-outline-primary mx-4 mt-4" name="adminPassUpdatebtn">UPDATE</button>
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
    include('./adminMainInclude/footer.php');
?>