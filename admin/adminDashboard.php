<?php
    include('./adminMainInclude/header.php');
    if(!isset($_SESSION))
{
    session_start();
}
    include('../dbconnection.php');
    if(isset($_SESSION['is_admin_login']))
    {
        $adminEmail = $_SESSION['adminLogEmail'];
    }else{
        echo "<script> location.href = '../index.php';</script>";
    }
    $sql= "SELECT * FROM teacher";
    $result = $conn->query($sql);
    $totalteacher = $result->num_rows;

    $sql= "SELECT * FROM student";
    $result = $conn->query($sql);
    $totalstu = $result->num_rows;

 ?>
         <div class="col-lg-9 mt-5" >
                <div class="row mx-5 text-center">
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-secondary" style="max-width: 18 rem;">
                            <div class="card-header">
                                Teachers
                            </div>
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $totalteacher; ?></h4>
                                <a href="teacher.php" class="btn text-white">View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 mt-5">
                        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                            <div class="card-header">
                                Students
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">
                                <?php echo $totalstu; ?>
                                </h4>
                                <a href="student.php" class="btn text-white">View</a>
                            </div>
                        </div>
                    </div>
                   
    </div>


<?php
    include('./adminMainInclude/footer.php');
    ?>

