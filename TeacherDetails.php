<?php
   include('./mainInclude/header.php');
   include('./dbconnection.php');
   if(isset($_SESSION['is_login']))
   {
       $stuEmail = $_SESSION['studentLogEmail'];
   }else{
       echo "<script> location.href = './index.php';</script>";
   }
?>

<div class="conatiner col-lg-10" style="margin-top: 10%; margin-left:8%">
<?php
        if(isset($_GET['tec_id']))
        {
            $tec_id = $_GET['tec_id'];
            $_SESSION['tec_id'] = $tec_id;
            $sql = "SELECT * FROM teacher WHERE tec_id = '$tec_id'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
        }
    ?>
    <div class="row">
        <div class="col-lg-4" >
            <img src="<?php echo str_replace('..','.',$row['tec_img'])?>" style="height: 250px; width: 250px; border-radius: 75%;">
        </div>
        <div class="col-lg-8">
            <div class="card-body">
                <h4 class="card-title">Teacher Name:<?php echo $row['tec_name']?></h4>
                <p class="card-text">Mail Id : <?php echo $row['tec_mail'] ?></p>
                <p class="card-text">Occupation: <?php echo $row['tec_occ'] ?></p>
                <p class="card-text">Seating Location: <b><?php echo $row['tec_location'] ?></b></p>
            </div>
            <div class="col-4">
                <img src="<?php echo str_replace('..', '.',$row['tec_loc_img'])?>" alt="" srcset="">
            </div>
        </div>
    </div>
</div>

<?php
    include('./mainInclude/footer.php');
?>