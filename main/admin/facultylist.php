<?php include '../templates/header_start.php'; ?>


<!-- Custom css files go here -->
<link rel="stylesheet" href="css/Admin.css">
<?php include '../templates/header_end.php'; ?>
<link rel="stylesheet" href="../assets/jquery.dataTables.min.css">


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#"><i class="fas fa-qrcode"></i>Dashboard</a>
  <a href="list.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i>List</a>
  <a href="#"><i class="fa fa-address-book" aria-hidden="true"></i>Registered Group</a>
  <a href="#"><i class="fa fa-users" aria-hidden="true"></i>Group Allocation</a>
  <a href="#"><i class="far fa-question-circle"></i>Evaluator Allocation</a>
  <a href="#"><i class="fas fa-sliders-h"></i>Mentor Allocation</a>
  <a href="#">Log out</a>
</div>

<div id="main">
  <a href="http://www.dypatil.edu/mumbai/rait"><img src="../assets/images/Rait_logo.png" class="top_logo"></a>
  <!--<img src="files/images/Rait_new_logo_png.png" class="top_logo">-->
  <div class="chip">
    <img src="../assets/images/img_avatar.png" alt="Person" width="96" height="96">
    Username
  </div>
  <nav class="navbar navbar-expand-lg primary_color navbar-dark">
    <a class="navbar-brand" href="#"><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li onclick="window.location='admin.php'" class="nav-item nav-link" id="index">
          Home
        </li>
        <li class="nav-item nav-link" onclick="window.location='facultylist.php'" id="facultylist">
          Faculty List
        </li>
        <li class="nav-item nav-link" onclick="changetab(this.id)" id="studentlist">
          Students List
        </li>

      </ul>

    </div>
  </nav>
  <!-- header end  -->

  <!-- faculty table  -->
  <div id="main-content" class="container">
    <div class="mt-5 facultylist" id="pagination_data">

    </div>
  </div>
  <!-- facultylist end  -->


</div>


 
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




