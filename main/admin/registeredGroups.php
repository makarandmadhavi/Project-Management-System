<?php include 'admin_header.php'; ?>
<?php include '../templates/header_start.php'; ?>

<!-- Custom css files go here -->
<link rel="stylesheet" href="css/Admin.css">
<link rel="stylesheet" href="css/faculty.css">
<link rel="stylesheet" href="css/view_details.css">
<?php include '../templates/header_end.php'; ?>


<?php include 'sidenav.php';?>


<script>
window.onload = function() {
  changetabforgroups('allgroups', 'groups');
};
</script>

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
      <li class="nav-item nav-link" onclick="(back == 1) ? changetabforgroups('allprojects', 'all') : changetabforgroups(this.id, 'groups')" id="allgroups"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i></li>
        <li class="nav-item nav-link" onclick="changetabforgroups(this.id, 'groups')" id="allgroups">
          All Groups
        </li>
        <li class="nav-item nav-link" onclick="changetabforgroups(this.id, 'all')" id="allprojects">
          All Projects
        </li>
        <li class="nav-item nav-link" onclick="changetabforgroups(this.id, 'approved')" id="allprojects">
          Approved Groups
        </li>
        <li class="nav-item nav-link" onclick="changetabforgroups(this.id, 'pending')" id="allprojects">
          Yet to Approve
        </li>
        <li class="nav-item nav-link" onclick="changetabforgroups(this.id, 'rejected')" id="allprojects">
          Rejected Groups
        </li>
        

      </ul>
      <a href="logout.php" class='mx-4'><button type="button" class="btn btn-success">Logout</button></a>
    </div>
  </nav>

    <div id="main-content" class="container">

    </div>


</div>


<script src="js/admin.js"></script>
<?php include '../templates/footer.php'; ?>