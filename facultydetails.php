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

<div class="container mt-5">
<h2 class="main-title text-center pt-3 " style="color:#0B6666; font-family:playfair display; margin-top:10%">All Faculty Member</h2>
    <div class="row mt-4">
    <?php
                    $sql = "SELECT * FROM teacher";
                    $result = $conn->query($sql);
                    if($result->num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                    $tec_id = $row['tec_id'];
                    echo'
                        <div class="col-sm-4 mb-4">
                        <a href="TeacherDetails.php?tec_id='.$tec_id.'" class="btn" style="text-align: left; padding:0px; ">
                        <div class="card">
                            <div class="col-md-4 ">         
                                <img src="'.str_replace('..', '.',$row['tec_img']).'"style=" width: 75px; height:75px;border-radius:50%; margin-left:10px; margin-top:10px;">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">'.$row['tec_name'].'</h5>
                                <p class="card-text">'.$row['tec_occ'].'</p>
                            </div>
                            <div class="card-footer ">
                                <a class="btn btn-primary text-white font-weight-bolder float-right mx-3" href="TeacherDetails.php?tec_id='.$tec_id.'">View Details</a>
                            </div>
                        </div>
                        </a>
                        </div>';
                    }
                }
                ?>
    </div>
</div>
<?php
    include('./mainInclude/footer.php');
?>