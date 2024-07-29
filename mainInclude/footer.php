<!--sign up form-->


<!-- Modal -->
<div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuRegModalCenterLabel">Student's Sign Up</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="stuRegForm">
          <div class="form-group">
            <i class="fas fa-user"></i><label for="stuname" class="px-2 font-weight-bold">Name</label>
            <small id="statusMsg1"></small>
            <input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname" >
          </div>
          <div class="form-group">
            <i class="fas fa-envelope"></i><label for="stuemail" class="px-2 font-weight-bold">E-Mail</label>
            <small id="statusMsg2"></small>
            <input type="email" class="form-control" placeholder="Email" name="stuemail" id="stuemail" >
            <small class="form-text">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <i class="fas fa-key"></i><label for="stupass" class="px-2 font-weight-bold">New Password</label>
            <small id="statusMsg3"></small>
            <input type="password" class="form-control" placeholder="Password" name="stupass" id="stupass">
          </div>
      </form>
      </div>
      <div class="modal-footer">
        <span id="successMsg"></span>
        <button type="submit" id="signup" class="btn btn-outline-primary" onclick="addStu()">Sign Up</button>
        <!-- <button type="button" id="signup" class="btn btn-primary" onclick="go()">Sign Up</button> -->
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!---sign up form-->
<!--log in form-->


<!-- Modal -->
<div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="stuLoginModalCenterLabel">Student's Log In</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="stuLoginForm">
          <div class="form-group">
            <i class="fas fa-envelope"></i><label for="stuLogemail" class="px-2 font-weight-bold">E-Mail</label>
            <small id="statusLogMsg1"></small>
            <input type="email" class="form-control" placeholder="Email" name="stuLogemail" id="stuLogemail">
          </div>
          <div class="form-group">
            <i class="fas fa-key"></i><label for="stuLogpass" class="px-2 font-weight-bold">Password</label>
            <small id="statusLogMsg2"></small>
            <input type="password" class="form-control" placeholder="Password" name="stuLogpass" id="stuLogpass">
          </div>
      </form>
      </div>
      <div class="modal-footer">
        <small id="statusLogMsg"></small>
        <button type="submit" id="signup" class="btn btn-outline-primary" onclick="checkStuLogin()">Sign Up</button>
        <!-- <button type="button" id="stuLoginBtn" class="btn btn-primary" onclick="checkStuLogin()">Log In</button> -->
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>
<!--log in form-->
<!--admin form-->


<!-- Modal -->
<div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="adminLoginModalCenterLabel">Admin Log In</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="adminLoginForm">
          <div class="form-group">
            <i class="fas fa-envelope"></i><label for="adminLogemail" class="px-2 font-weight-bold">E-Mail</label>
            <small id="statusAdminLogMsg2"></small>
            <input type="email" class="form-control" placeholder="Email" name="adminLogemail" id="adminLogemail">
          </div>
          <div class="form-group">
            <i class="fas fa-key"></i><label for="adminLogpass" class="px-2 font-weight-bold">Password</label>
            <small id="statusAdminLogMsg2"></small>
            <input type="password" class="form-control" placeholder="Password" name="adminLogpass" id="adminLogpass">
          </div>
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" id="adminLoginBtn" class="btn btn-primary" onclick="checkAdminLogin()">Log In</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div>
</div>



<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/custom.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

<!-- <script src='https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js'></script> -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/textfit/2.4.0/textFit.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/owl.carousel.min.js"></script>
<script src="js/ajaxrequest.js"></script>
<script src="js/adminajaxrequest.js"></script>

<script src="js/script.js"></script>