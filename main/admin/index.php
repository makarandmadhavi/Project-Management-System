<?php include 'admin_header.php'; ?>
<?php include '../templates/header_start.php'; ?>

<!-- Custom css files go here -->
<link rel="stylesheet" href="css/Admin.css">
<link rel="stylesheet" href="css/faculty.css">
<?php include '../templates/header_end.php'; ?>
<link rel="stylesheet" href="../assets/jquery.dataTables.min.css">

<?php include 'sidenav.php';?>

<div id="main">
  <a href="http://www.dypatil.edu/mumbai/rait"><img src="../assets/images/Rait_logo.png" class="top_logo"></a>
  <!--<img src="files/images/Rait_new_logo_png.png" class="top_logo">-->
  <div class="chip">
    <img src="../assets/images/img_avatar.png" alt="Person" width="96" height="96">
    ADMIN
  </div>
  <nav class="navbar navbar-expand-lg primary_color navbar-dark">
    <a class="navbar-brand" href="#"><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
      <a href="logout.php" class='mx-4'><button type="button" class="btn btn-success">Logout</button></a>
    </div>
    
  </nav>

    <div id="main-content" class="container">
        <h1 class="text-center mt-4"><b>Evaluator Assignment</b></h1>
        <!-- facultylist table start  -->
        <div class="mt-5 facultylist" id="pagination_data">

        </div>
        <!-- facultylist table end  -->
        
          <button class="btn btn-success float-right " id="assign"> Assign Evaluator</button>
          <button class="btn btn-success  float-right mx-4" id="checkall" onclick="checkall()" > Select All</button>
        
        
    </div>


</div>


<script src="js/admin.js"></script>
 <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="../assets/jquery-3.5.1.min.js"></script>
 
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>

  <script src="../assets/bootstrap.min.js"></script>
  
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

<script>



</script>
<script src="../assets/jquery.dataTables.min.js"></script>
<script src="js/addEvaluator.js"></script>
</body>
</html> 