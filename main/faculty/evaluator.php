<?php
  include 'backend/conn.php';
  include 'faculty_header.php';
?>

<?php include '../templates/header_start.php'; ?>
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/evaluator.css">
<?php include '../templates/header_end.php'; ?>
<?php include 'sidenav.php';?>  
  <div id="main">
    <a href="http://www.dypatil.edu/mumbai/rait"><img src="../assets/images/Rait_new_logo_png.png" class="top_logo"></a>
  <!--<img src="./Rait_new_logo_png.png" class="top_logo">-->
    <div class="chip">
      <img src="../assets/images/img_avatar.png" alt="Person" width="96" height="96">
      <?php echo $userLoggedIn;?>
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
  <div class="container mt-4">
      <div class="row">
        <!-- card start  -->
        <div class="card-wrapper col-lg-4 col-md-6 col-xs-12">
          <div class="card">
            <div class="card-img-wrapper">
              <img class="card-img-top" src="../assets/images/group_avatar.png" alt="Card image cap">
            </div>
            <div class="card-body">
              <h5 class="card-title">Group ID 1<p>Domain Name:Deep Learning</p></h5>
              <div class="card-content">
                <p class="card-text">Project Name:<p>Group member 1:</p><p>Group member 2:</p><p>Group member 3:</p></p>
                <a href="#" class="btn btn-primary">Check Status</a>
              </div>
            </div>
          </div>
        </div>
       <!-- card end   -->
          
          
      </div>
    </div>

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



<script src="js/index.js"></script>
<?php include '../templates/footer.php'; ?> 
