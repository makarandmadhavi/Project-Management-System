<?php
  include 'backend/conn.php';
  include 'faculty_header.php';
  include 'backend/get_evaluator_data.php';
  $faculty=getfacultydetails($userLoggedIn);
?>

<?php include '../templates/header_start.php'; ?>
<link rel="stylesheet" href="css/index.css">
<?php include '../templates/header_end.php'; ?>
<?php include 'sidenav.php';?> 

  <div id="main">
    <a href="http://www.dypatil.edu/mumbai/rait"><img src="../assets/images/Rait_new_logo_png.png" class="top_logo"></a>
    <div class="chip">
      <img src="../assets/images/img_avatar.png" alt="Person" width="96" height="96">
      <?php echo $faculty['name'];?>
    </div>
    <nav class="navbar navbar-expand-lg primary_color navbar-dark">
      <a class="navbar-brand" href="#"><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        
      </ul>
      
    </div>
  </nav>
  <div>
    <br>
    <br>
    <br>
    <br>
    <br>
  </div>
  <!--Footer-->
  <div class="jumbotron text-center" style="margin-bottom:0">
    <p class="footer-data">Footer</p>
  </div>
  <!--Footer Ends-->
</div>



  
</div>
<script src="js/index.js"></script>
<?php include '../templates/footer.php'; ?>
