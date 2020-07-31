<?php
  include 'backend/conn.php';
  include 'faculty_header.php';
?>

<!DOCTYPE html>
<html>
<!--
<head>
    <title>Faculty Group Cards</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Fcard.css">

</head>-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="Fcard.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <title>RAIT</title>
</head>
<body> 
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="index.php"><i class="fas fa-qrcode"></i>Dashboard</a>
    <a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Student List</a>
    <!--<a href="#"><i class="fa fa-address-book" aria-hidden="true"></i>Registered Group</a>
    <a href="#"><i class="fa fa-users" aria-hidden="true"></i>Group Allocation</a>
    <a href="#"><i class="far fa-question-circle"></i>Evaluator Allocation</a>
    <a href="#"><i class="fas fa-sliders-h"></i>Mentor Allocation</a>-->
    <?php
    $evaluator_query=$conn->query("SELECT id FROM  evalulators WHERE facultyid=$userLoggedIn"); 
    $evaluator = $evaluator_query->fetch_assoc();
    if ($evaluator){
        echo '<a href="Fcard.html"><i class="fas fa-sliders-h"></i>Evaluator</a>';
    }/*
    else{
        echo '<a href="#"><i class="fas fa-sliders-h">Evaluator</i></a>';
    }*/
    ?>
    <a href="backend/logout.php">Log out</a>
  </div>

  <div id="main">
    <a href="http://www.dypatil.edu/mumbai/rait"><img src="./Rait_new_logo_png.png" class="top_logo"></a>
  <!--<img src="./Rait_new_logo_png.png" class="top_logo">-->
    <div class="chip">
      <img src="./img_avatar.png" alt="Person" width="96" height="96">
      <?php echo $user['name'];?>
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
  <br>
  <br>

  <div>

    <div class="container">
      <div class="row">
        <div class="card-wrapper col-lg-4 col-md-6 col-xs-12">
          <div class="card">
            <div class="card-img-wrapper">
              <img class="card-img-top" src="dl.png" alt="Card image cap">
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
        <div class="card-wrapper col-lg-4 col-md-6 col-xs-12">
            <div class="card">
              <div class="card-img-wrapper">
                <img class="card-img-top" src="ds.png" alt="Card image cap">
              </div>
              <div class="card-body">
                <h5 class="card-title">Group ID 2<p>Domain Name:Data Science</p></h5>
                <div class="card-content">
                    <p class="card-text">Project Name:<p>Group member 1:</p><p>Group member 2:</p><p>Group member 3:</p></p>
                    <a href="#" class="btn btn-primary">Check Status</a>
                </div>
              </div>
            </div>
          </div>
          <div class="card-wrapper col-lg-4 col-md-6 col-xs-12">
            <div class="card">
              <div class="card-img-wrapper">
                <img class="card-img-top" src="es.png" alt="Card image cap">
              </div>
              <div class="card-body">
                <h5 class="card-title">Group ID 3<p>Domain Name:Embedded System</p></h5>
                <div class="card-content">
                    <p class="card-text">Project Name:<p>Group member 1:</p><p>Group member 2:</p><p>Group member 3:</p></p>
                    <a href="#" class="btn btn-primary">Check Status</a>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>

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
</container>
  <!--Footer-->
  <div class="jumbotron text-center" style="margin-bottom:0">
    <p class="footer-data">Footer</p>
  </div>
  <!--Footer Ends-->
</div>

  <!--Footer
  <div class="jumbotron text-center" style="margin-bottom:0">
    <p class="footer-data">Footer</p>
  </div>
  Footer Ends-->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
  document.body.style.backgroundColor = "white";
}
</script>
   
</body>
</html> 

  <!--  
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</html>
-->