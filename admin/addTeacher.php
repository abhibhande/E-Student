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

    if(isset($_REQUEST['tecSubmitBtn'])){
        if(($_REQUEST['tec_name'] == "") || ($_REQUEST['tec_mail'] == "") || ($_REQUEST['tec_occ'] == "") || ($_REQUEST['tec_location'] == ""))
        {
            $msg = '<div class="alert alert-warning col-sm-6 mx-5 mt-2">All Fields Required</div>';
        }else{
            $tec_name = $_REQUEST['tec_name'];
            $tec_mail = $_REQUEST['tec_mail'];
            $tec_occ = $_REQUEST['tec_occ'];
            $tec_location = $_REQUEST['tec_location'];
            $tec_image = $_FILES['tec_img']['name'];
            $tec_image_temp = $_FILES['tec_img']['tmp_name'];
            $img_folder = '../images/tecimg/'.$tec_image;
            move_uploaded_file($tec_image_temp, $img_folder);

            $tec_loc_image = $_FILES['tec_loc_img']['name'];
            $tec_loc_image_temp = $_FILES['tec_loc_img']['tmp_name'];
            $loc_img_folder = '../images/teclocimg/'.$tec_loc_image;
            move_uploaded_file($tec_loc_image_temp, $loc_img_folder);
            // Insert Query for Teacher Table
            $sql = "INSERT INTO teacher (tec_name, tec_mail, tec_occ,tec_location, tec_img,tec_loc_img) VALUES ('$tec_name', '$tec_mail', '$tec_occ','$tec_location', '$img_folder', '$loc_img_folder')";

            if($conn->query($sql) == TRUE)
            {
                $msg = '<div class="alert alert-success col-sm-6 mx-5 mt-2">Teacher Added Succesfully</div>';
            }
            else{
                $msg = '<div class="alert alert-danger col-sm-6 mx-5 mt-2">Unable to Add Teacher</div>';
            }
        }
    }
?>

<div class="col-sm-6 mt-5 mx-3 jumbotron bg-gradient px-5">
    <h3 class="text-center"><i>Add New Teacher</i></h3>
    <form  action="" method="post" enctype="multipart/form-data">
        <div class="form-group mb-2">
            <label for="tec_name"><b>Teacher Name</b></label>
            <input type="text" class="form-control" id="tec_name" name="tec_name">
        </div>
        <div class="form-group mb-2">
            <label for="tec_mail"><b>Teacher Mail</b></label>
            <input type="text" class="form-control" id="tec_mail" name="tec_mail">
        </div>
        <div class="form-group mb-2">
            <label for="tec_occ"><b>Teacher Occupation</b></label>
            <input type="text" class="form-control" id="tec_occ" name="tec_occ">
        </div>
        <div class="form-group mb-2">
            <label for="tec_location"><b>Teacher Location</b></label>
            <input type="text" class="form-control" id="tec_location" name="tec_location">
        </div>
        <div class="form-group mt-2 mb-2">
            <label for="tec_img"><b>Teacher Image</b></label>
            <input type="file" class="form-control-file" id="tec_img" name="tec_img">
        </div>
        <div class="form-group mt-2 mb-2">
            <label for="tec_loc_img"><b>Teacher Location Image</b></label>
            <input type="file" class="form-control-file" id="tec_loc_img" name="tec_loc_img">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-outline-primary" id="tecSubmitBtn" name="tecSubmitBtn">Submit</button>
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