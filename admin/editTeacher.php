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
        if(($_REQUEST['tec_id'] == "") || ($_REQUEST['tec_name'] == "") || ($_REQUEST['tec_mail'] == "") || ($_REQUEST['tec_occ'] == "")|| ($_REQUEST['tec_location'] == ""))
        {
            $msg = '<div class="alert alert-warning col-sm-6 mx-5 mt-2">All Fields Required</div>';
        }else{
            $tid = $_REQUEST['tec_id'];
            $tname = $_REQUEST['tec_name'];
            $tmail = $_REQUEST['tec_mail'];
            $tocc = $_REQUEST['tec_occ'];
            $tlocation = $_REQUEST['tec_location'];
            $timg = '../images/tecimg/'. $_FILES['tec_img']['name'];
            $tlocimg = '../images/teclocimg/'. $_FILES['tec_loc_img']['name'];

            $sql = "UPDATE teacher SET tec_id = '$tid', tec_name = '$tname', tec_mail = '$tmail', tec_occ = '$tocc', tec_location = '$tlocation', tec_img = '$timg', tec_loc_img = '$tlocimg' WHERE tec_id = '$tid'";

            if($conn->query($sql) == TRUE)
            {
                $msg ='<div class="alert alert-success col-sm-6 mx-5 mt-2" role="alert">Teacher Updated Successfully</div>';
            }else{
                $msg ='<div class="alert alert-danger col-sm-6 mx-5 mt-2" role="alert">Unable to Update</div>';
            }
        }
    }
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron bg-gradient px-5">
    <h3 class="text-center"><i>Update Teacher</i></h3>

    <?php 
        if(isset($_REQUEST['view']))
        {
            $sql = "SELECT * FROM teacher WHERE tec_id = {$_REQUEST['id']}";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
        }
    ?>
    <form  action="" method="post" enctype="multipart/form-data">
        <div class="form-group mb-2">
            <label for="tec_id"><b>Teacher ID</b></label>
            <input type="text" class="form-control" id="tec_id" name="tec_id" value="<?php
                if(isset($row['tec_id']))
                {
                    echo $row['tec_id'];
                }
            ?>" readonly>
        </div><div class="form-group mb-2">
            <label for="tec_name"><b>Teacher Name</b></label>
            <input type="text" class="form-control" id="tec_name" name="tec_name" value="<?php
                if(isset($row['tec_name']))
                {
                    echo $row['tec_name'];
                }
            ?>">
        </div>
        <div class="form-group mb-2">
            <label for="tec_mail"><b>Teacher Mail</b></label>
            <input type="text" class="form-control" id="tec_mail" name="tec_mail" value="<?php
                if(isset($row['tec_mail']))
                {
                    echo $row['tec_mail'];
                }
            ?>">
        </div>
        <div class="form-group mb-2">
            <label for="tec_occ"><b>Teacher Occupation</b></label>
            <input type="text" class="form-control" id="tec_occ" name="tec_occ" value="<?php
                if(isset($row['tec_occ']))
                {
                    echo $row['tec_occ'];
                }
            ?>">
        <div class="form-group mb-2">
            <label for="tec_location"><b>Teacher Location</b></label>
            <input type="text" class="form-control" id="tec_location" name="tec_location" value="<?php
                if(isset($row['tec_location']))
                {
                    echo $row['tec_location'];
                }
            ?>">
        </div>
        <div class="form-group mt-2 mb-2">
            <label for="tec_img"><b>Teacher Image</b></label>
            <img src="<?php
                if(isset($row['tec_img']))
                {
                    echo $row['tec_img'];
                }
            ?>" alt="" class=" img-thumbnail">
            <input type="file" class="form-control-file" id="tec_img" name="tec_img">
        </div>
        <div class="form-group mt-2 mb-2">
            <label for="tec_loc_img"><b>Location Image</b></label>
            <img src="<?php
                if(isset($row['tec_loc_img']))
                {
                    echo $row['tec_loc_img'];
                }
            ?>" alt="" class=" img-thumbnail">
            <input type="file" class="form-control-file" id="tec_loc_img" name="tec_loc_img">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-outline-primary" id="requpdate" name="requpdate">Update</button>
            <a href="teacher.php" class="btn btn-outline-secondary">Close</a>
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