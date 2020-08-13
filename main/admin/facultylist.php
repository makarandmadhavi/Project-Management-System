<?php include 'admin_header.php'; ?>
<?php include '../templates/header_start.php'; ?>


<!-- Custom css files go here -->
<link rel="stylesheet" href="css/Admin.css">
<?php include '../templates/header_end.php'; ?>
<link rel="stylesheet" href="../assets/jquery.dataTables.min.css">


<?php include 'sidenav.php';?>

<div id="main">
  <a href="http://www.dypatil.edu/mumbai/rait"><img src="../assets/images/Rait_logo.png" class="top_logo"></a>
  <!--<img src="files/images/Rait_new_logo_png.png" class="top_logo">-->
  <div class="chip">
    <img src="../assets/images/img_avatar.png" alt="Person" width="96" height="96">
    Admin
  </div>
  <nav class="navbar navbar-expand-lg primary_color navbar-dark">
    <a class="navbar-brand ml-2" href="#"><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li onclick="window.location='facultylist.php'" class="nav-item nav-link" id="index">
          Home
        </li>
        <li class="nav-item nav-link" onclick="window.location='facultylist.php'" id="facultylist">
          Faculty List
        </li>
        <li class="nav-item nav-link" onclick="changetab(this.id)" id="studentlist">
          Students List
        </li>

      </ul>
      <a href="logout.php" class='mx-4'><button type="button" class="btn btn-success">Logout</button></a>
    </div>
  </nav>
  <!-- header end  -->

  <!-- faculty table  -->
  <div id="main-content" class="container">
  <h1 class="text-center mt-4"><b>Faculty List</b></h1>
    <div class="mt-5 facultylist" id="pagination_data">

    </div>
  </div>
  <!-- facultylist end  -->


</div>

  <!--Footer-->
  <div class="jumbotron text-center" style="margin-bottom:0; margin-top:100px">
  <div class="container">
    <div class="row">
      <div class="col-4">
        <div class="single-footer-widget">
          <h4 class="footer-data">FINAL YEAR PROJECT MANAGEMENT SYSTEM</h4>								
        </div>
      </div>
      <div class="col-4">
        <div class="single-footer-widget">
          <h4 class="footer-data">Group Members</h4>
          <div class="row">
            <div class="col-6">
              <ul class="footer-data">
                <li>Piyush Jha</li>
                <li>Nikhil Ingale</li>
                <li>Makarand M.</li>
                <li>Isha Gujar</li>
                <li>Mansi Lambat</li>
              </ul>
            </div>
            <div class="col-6">
              <ul class="footer-data">
                <li>Prasad Shete</li>
                <li>Hemant Singh</li>
              </ul>
            </div>
          </div>
        </div>
      </div>						
      <div class="col-4 social-widget">
        <div class="single-footer-widget">
          <h4 class="footer-data">Under the Guidance of - </h4>
          <h4 class="footer-data">Mrs. Smita Bharne</h4>
        </div>
      </div>							
    </div>
  </div>
</div>
</div>
  <!--Footer Ends-->


 
 <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="../assets/jquery-3.5.1.min.js"></script>
 
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

  <script src="../assets/bootstrap.min.js"></script>
  
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>


<script src="../assets/jquery.dataTables.min.js"></script>
<script src="js/list.js"></script>
</body>
</html> 





