<?php 
    include('./mainInclude/header.php');
    include('./dbconnection.php');
?>


<div class="container-fluid remove-img-marg">
  <div class="img-parent">
    <img src="images/R.jpeg" >
    <div class="img-overlay">

    </div>
  </div>
  <div class="img-content">
    <h1 class="my-content" style="font-family: 'Times New Roman', Times, serif;"> Welcome to <i>E-Student Corner</i></h1>
    <span class="auto-input" style="font-size:x-large;font-family:'Quintessential', cursive; color:white;font-weight:bold"></span>
  </div>
</div>


  <!-- About -->
  <section id="about">
  <h2 class="main-title text-center pt-3 " style="color:#0B6666; font-family:playfair display">About us</h2>
  <p class="para" style="padding: 0 30px 0 30px; text-align: center;">"At PCCOE's Computer Engineering Department, we provide top-notch technical education, supported by cutting-edge infrastructure, dedicated faculty, and driven students. Our holistic approach fosters academic excellence, research, skills development, and industry exposure, shaping well-rounded professionals for the future."
  </p>
</section>

<div class="container-fluid">
    <div class="col">
        <h4 class="heading text-center"style="color:#0B6666; font-family:playfair display; margin-top: 10px;">Mission & Vision</h4>
    </div>
        <img class="images" src="images/3.png"   style="width: 50%; height:50%;">

    <div class="content" id="objective">
        <h4>Mission</h4>
        <p>To develop technologically competent and self-sustained professionals through contemporary curriculum. &  To foster leadership skills and ethics with holistic development.</p>
        <h4>Vision</h4>
        <p>To be a premier Computer Engineering program by achieving excellence in Academics and Research for creating globally competent and ethical professionals.</p>
        <h4>Objective</h4>
        <p>Graduates of the Programme will perform to the expectations of employers, explore the opportunities for higher studies and/or show the awareness of self-business challenges.</p>
    </div>
</div>
<!-- End About -->


<!-- Cards -->
<h2 class="main-title text-center pt-3 " style="color:#0B6666; font-family:playfair display">Our Honorable</h2>
<div class="container" id="cards">
    <div class="card" style="width: 18rem;">
        <div class="card-body" style="align-items: center;">
            <img src="images/director-PCCoE.jpg"style=" width: 75px; height:75px;">
</div>
            <div class="card-title">
                <h4 style="text-align: center;">Dr. Govind N. Kulkarni</h4>
            </div>
            <div class="card-content">
                <h6 style="text-align: center;">Director (PCCoE)</h6>
                <p style="text-align: center; font-family: playfair display;">BE (Mechanical)</p>
            </div>
    </div>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <img src="images/dr rajeshwari k.jpg" style="width: 75px; height:75px;">
</div>
            <div class="card-title">
                <h4 style="text-align: center;">Dr. K. Rajeswari </h4>
            </div>
            <div class="card-content">
                <h6 style="text-align: center;">Head of Department</h6>
                <p style="text-align: center; font-family: playfair display;">PHD (Computer Engineering) </p>
            </div>
    </div>
</div>
<!-- feedback-->
<section class="testimonials">
	<div class="container">
    <h2 class="text-center"style="color:#0B6666; font-family:playfair display">What our Students says?</h2>
      <div class="row" style="margin-top: 10px;">
        <div class="col-sm-12">
          <div id="customers-testimonials" class="owl-carousel">

            <?php

              $sql = "SELECT s.stu_name, s.stu_occ, s.stu_img, f.f_content FROM student AS s JOIN feedback AS f ON s.stu_id = f.stu_id";
              $result = $conn->query($sql);
              if($result->num_rows > 0)
              {
                while($row = $result-> fetch_assoc()){
                  $s_img = $row['stu_img'];
                  $n_img = str_replace('..', '.',$s_img);
                
            ?>

            <!--TESTIMONIAL 1 -->
            <div class="item">
              <div class="shadow-effect">
                <img class="img-circle" src="<?php echo $n_img; ?>" alt="">
                <p><?php echo $row['f_content']; ?></p>
              </div>
              <div class="testimonial-name"><h5><?php echo $row['stu_name']; ?></h5>
            <small><?php echo $row['stu_occ']; ?></small></div>
            </div>
              <?php  }
              }?>

            <!--END OF TESTIMONIAL 1 -->
            
          </div>
        </div>
      </div>
      </div>
    </section>
<!-- feedback-->

<hr>
<footer>
<img class="logo" src="images/2.png" style="width: 75px; height:75px;">
    <a class="navbar-brand text-black" href="#">E-Student</a>
    <a href="https://www.instagram.com/pccoepune/" style="padding:5px; margin-left:75%"> <i class="bi bi-instagram"></i></a>
    <a href="https://twitter.com/PCCOEPune" style="padding:5px;"><i class="bi bi-twitter"></i></a>
    <a href="https://www.linkedin.com/company/pccoe-pune/?originalSubdomain=in" style="padding:5px;"><i class="bi bi-linkedin"></i></a>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1395.4447044539136!2d73.76078618871095!3d18.652670000000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2b987e7334617%3A0x13c75e0885ffece3!2sComputer%20Department%20of%20PCCOE!5e1!3m2!1sen!2sin!4v1699331371652!5m2!1sen!2sin" width="250" height="150" style="border:0; margin-left:40%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    <p style="text-align: center; color:#bab4b4"><i class="fa fa-copyright" aria-hidden="true"></i>Copyright | E-Student-2023 | <a style="color: #bab4b4;" href="#" data-bs-toggle="modal" data-bs-target="#adminLoginModalCenter">Admin LogIn</a></p>
</footer>
<?php 
    include('./mainInclude/footer.php');
?>