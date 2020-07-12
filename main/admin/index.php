<?php include '../templates/header_start.php'; ?>

<!-- Custom css files go here -->
<link rel="stylesheet" href="css/Admin.css">
<?php include '../templates/header_end.php'; ?>


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#"><i class="fas fa-qrcode"></i>Dashboard</a>
  <a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Student List</a>
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
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0 search_btn" type="submit">Search</button>
      </form>
    </div>
  </nav>
  <div>
    <h1>Create Content here</h1>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
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

<!--Footer
  <div class="jumbotron text-center" style="margin-bottom:0">
    <p class="footer-data">Footer</p>
  </div>
  Footer Ends-->
<script>
  function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
  }

  function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.body.style.backgroundColor = "white";
  }
</script>

<?php include '../templates/footer.php'; ?>