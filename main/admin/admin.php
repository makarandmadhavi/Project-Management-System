<?php include '../templates/header_start.php'; ?>

<!-- Custom css files go here -->
<link rel="stylesheet" href="css/Admin.css">
<link rel="stylesheet" href="css/faculty.css">
<?php include '../templates/header_end.php'; ?>


<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#"><i class="fas fa-qrcode"></i>Dashboard</a>
  <a href="facultylist.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i>List</a>
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
        <li onclick="window.location=''" class="nav-item nav-link" id="home">
          Home
        </li>
        <li class="nav-item nav-link" onclick="changetab(this.id)" id="faculty">
          View Faculty
        </li>
        <li class="nav-item nav-link" onclick="changetab(this.id)" id="students">
          Students List
        </li>
        

      </ul>

    </div>
  </nav>
  <div id="main-content" class="container">
    <div class="row">
      <div class="col-sm-6">

        <div class="card container add-box">
          <h5 class="card-header">Statistics</h5>
          <div class="card-body">
            <p class="card-text">Total Students- 600</p>
            <p class="card-text">Total Groups Registered- 10</p>
            <p class="card-text">Total Students Registered- 30</p>
            <p class="card-text">Total Students Yet to Regist- 30</p>


          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div id="add-faculty-view" class="container add-box">
          <center>
            <h2 class="card-title">Add Faculty</h2>
          </center>
          <form onsubmit="add_faculty(this);" action="javascript:void(0);">
            <div class="form-group">
              <label>Name</label>
              <input type="text" class="form-control" id="name" placeholder="Name">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Email address</label>
              <input type="email" class="form-control" id="email" placeholder="name@example.com">
            </div>
            <div class="form-group">
              <label>Contact Number</label>
              <input type="number" class="form-control" id="phone" placeholder="0000000000">
            </div>
            <div class="form-group">
              <label>Domain</label>
              <select multiple class="form-control" id="domain">
                <option value="Machine Learning">Machine Learning</option>
                <option value="Artificial Intelligence">Artificial Intelligence</option>
                <option value="Internet of things">Internet of things</option>
                <option value="Web development">Web development</option>
              </select>
            </div>

            <div class="form-group">
              <label>Department</label>
              <select class="form-control" id="department">
                <option value="Computer Engineering">Computer Engineering</option>
                <option>Information Technology</option>
                <option>Electronics Engineering</option>
                <option>Electronics and Telecommunication Engineering</option>
                <option>Instrumentation</option>
              </select>
            </div>
            <center>
              <button type="submit" id="submit" class="btn btn-primary">Add</button>
            </center>
          </form>
        </div>
      </div>
    </div>
  </div>



</div>


<script src="js/admin.js"></script>

<?php include '../templates/footer.php'; ?>