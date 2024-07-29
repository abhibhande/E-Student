<?php 
    include_once('./mainInclude/header.php');
?>

<div class="container-fluid bg-dark">
    <div class="row">
        <img src="./images/bg.png" alt="courses" style="height: 500px; width: 100%; object-fit: cover; box-shadow: 10px;">
    </div>
</div>

<h2 class="main-title text-center pt-3 " style="color:#0B6666; font-family:playfair display">Our Honorable</h2>
<div class="container" id="cards">
    <div class="card" style="width: 18rem;">
        <div class="card-body" style="align-items: center;">
            <img src="images/dr rajeshwari k.jpg"style=" width: 75px; height:75px;">
</div>
            <div class="card-title">
                <h4 style="text-align: center;">Dr. K . Rajeswari</h4>
            </div>
            <div class="card-content">
                <!-- <h6 style="text-align: center;">Head of Department</h6> -->
                <p style="text-align: center; font-family: playfair display;">HoD (Computer Engineering)</p>
                <button class="btn btn-outline-primary mb-3" style="margin-left: 30%; " onclick="location.href='index.php';">View More</button>
            </div>
    </div>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <i class="fas fa-users    " style="height: 75px; width: 75px; margin-left: 30%;"></i>
</div>
            <div class="card-title">
                <h4 style="text-align: center;">Our Faculty Member </h4>
            </div>
            <div class="card-content">
                <!-- <h6 style="text-align: center;">Computer Department</h6> -->
                <p style="text-align: center; font-family: playfair display;">Computer Department </p>
                <button class="btn btn-outline-primary mb-3" style="margin-left: 30%; " onclick="location.href='facultydetails.php';">View More</button>
            </div>       
    </div>
</div>


<?php 
    include('./mainInclude/footer.php');
?>