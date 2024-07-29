<?php

if(!isset($_SESSION))
{
    session_start();
}

include('./stuInclude/header.php');
include_once('../dbconnection.php');

if(isset($_SESSION['is_login']))
{
    $studentEmail = $_SESSION['studentLogEmail'];
}else
{
    echo "<script> location.href='../index.php';</script>";
}

$sql = "SELECT * FROM student WHERE stu_email = '$studentLogEmail'";
$result = $conn->query($sql);
if($result->num_rows == 1)
{
    $row = $result->fetch_assoc();
    $stuId = $row["stu_id"];
    $stuName = $row["stu_name"];
    $stuOcc = $row["stu_occ"];
    $stuImg = $row["stu_img"];
}

if(isset($_REQUEST['updateStuNameBtn']))
{
    if(($_REQUEST['stuName'] == ""))
    {
        $passmsg = '<div class="alert alert-warning col-sm-6 mt-2 mx-5" role="alert">All Fields Required</div>';
    }
    else
    {
        $stuName = $_REQUEST["stuName"];
        $stuOcc = $_REQUEST["stuOcc"];
        $stu_image = $_FILES['stuImg']['name'];
        $stu_image_temp = $_FILES['stuImg']['tmp_name'];
        $img_folder = '../images/stu/'. $stu_image;
        move_uploaded_file($stu_image_temp, $img_folder);
        $sql = "UPDATE student SET stu_name = '$stuName', stu_occ = '$stuOcc', stu_img = '$img_folder' WHERE stu_email = '$studentLogEmail'";

        if($conn->query($sql) == TRUE)
        {
            $passmsg = '<div class="alert alert-success col-sm-6 mt-2 mx-5" role="alert">Updated Successfully</div>';
        }
        else
        {
            $passmsg = '<div class="alert alert-danger col-sm-6 mt-2 mx-5" role="alert">Unable to Update</div>';
        }
    }
}

?>

<div class="col-sm-6 mt-5">
    <form action="" method="POST" enctype="multipart/form-data" class="mx-5">
        <div class="form-group mb-2">
            <label for="stuId"><i>Student ID</i></label>
            <input type="text" class="form-control" id="stuId" name="stuId" value="<?php
            if(isset($stuId))
            {
                echo $stuId;
            }
            ?>" readonly>
        </div>
        <div class="form-group mb-2">
            <label for="stuEmail"><i>Student E-Mail</i></label>
            <input type="email" class="form-control" id="stuEmail" name="stuEmail" value="<?php
            if(isset($studentLogEmail))
            {
                echo $studentLogEmail;
            }
            ?>" readonly>
        </div>
        <div class="form-group mb-2">
            <label for="stuName"><i>Student Name</i></label>
            <input type="text" class="form-control" id="stuName" name="stuName" value="<?php
            if(isset($stuName))
            {
                echo $stuName;
            }
            ?>">
        </div>
        <div class="form-group mb-2">
            <label for="stuOcc"><i>Student Occupation</i></label>
            <input type="text" class="form-control" id="stuOcc" name="stuOcc" value="<?php
            if(isset($stuOcc))
            {
                echo $stuOcc;
            }
            ?>" >
        </div>
        <div class="form-group mt-2 mb-2">
            <label for="stuImg"><i>Student Image</i></label>
            <input type="file" class="form-control-file" id="stuImg" name="stuImg">
        </div>
        <button type="submit" class="btn btn-outline-primary" name="updateStuNameBtn" id="updateStuNameBtn">Update</button>
        <?php
            if(isset($passmsg))
            {
                echo $passmsg;
            }
        ?>
    </form>
</div>

<?php
    include('./stuInclude/footer.php');
?>