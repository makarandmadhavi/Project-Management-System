<?php 
    include 'backend/config.php';

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $mem1 = $_GET["para1"];
    $mem2 = $_GET["para2"];
    $mem3 = $_GET["para3"];

    $stmt1 = $conn->prepare("select email, contact from students where name = ?");
    echo $conn->error;
    $stmt1->bind_param("s",$mem1);
    $stmt1->execute();
    $result1 = $stmt1->get_result();
    $row1 = $result1->fetch_row();

    $mem1_email = $row1[0];
    $mem1_phone = $row1[1];

    $stmt1->close();

    $stmt2 = $conn->prepare("select email, contact from students where name = ?");
    echo $conn->error;
    $stmt2->bind_param("s",$mem2);
    $stmt2->execute();
    $result2 = $stmt2->get_result();
    $row2 = $result2->fetch_row();

    $mem2_email = $row2[0];
    $mem2_phone = $row2[1];

    $stmt2->close();

    $stmt3 = $conn->prepare("select email, contact from students where name = ?");
    echo $conn->error;
    $stmt3->bind_param("s",$mem3);
    $stmt3->execute();
    $result3 = $stmt3->get_result();
    $row3 = $result3->fetch_row();

    $mem3_email = $row3[0];
    $mem3_phone = $row3[1];

    $stmt3->close();

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../assets/bootstrap.min.css">
  <link rel="stylesheet" href="css/starter.css">
  <link rel="stylesheet" href="css/groupRegistration.css">

  <title>Group Registration</title>

</head>

<body>
    <!--Head and Navbar-->
    <div>
    <img src="../assets/images/Rait_new_logo_png.png" class="top_logo">
    <div class="chip">
        <img src="../assets/images/img_avatar.png" alt="Person" width="96" height="96">
        Nikhil Ingale
    </div>
    </div>
    <nav class="navbar navbar-expand-lg primary_color navbar-dark">
    <a class="navbar-brand" href="#">Navbar</a>
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
    <!--Head and Navbar Ends-->

<div class="container">
    <div class="group_form">
        <form action="backend/groupRegistration.php" method="POST">
            <div id="form_heading">
                <p>Confirm your Group Details : </p>
                <h5>Group Members : </h5>
            </div>
            
            <div class="member_names">
                <div class="form-row" id="member_name">
                    <label>Member-1 : &nbsp; </label>
                    <label id="member1"></label>
                    <input type="hidden" id="mem1" name="member1" value="<?php echo $mem1 ?>">
                </div>
                <div class="form-row" id="member_name">
                    <label>Member-2 : &nbsp; </label>
                    <label id="member2"></label>
                    <input type="hidden" id="mem2" name="member2" value="<?php echo $mem2 ?>">
                </div>
                <div class="form-row" id="member_name">
                    <label>Member-3 : &nbsp; </label>
                    <label id="member3"></label>
                    <input type="hidden" id="mem3" name="member3" value="<?php echo $mem3 ?>">
                </div>
            </div>
            <br>

            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputEmail4"><?php echo $mem1 ?>'s Email</label>
                <input type="email" class="form-control" id="mem1_email" name="mem1_email" value="<?php echo $mem1_email ?>">
                </div>
                <div class="form-group col-md-6">
                <label for="phone"><?php echo $mem1 ?>'s Contact</label>
                <input type="text" class="form-control" name="mem1_phone" id="mem1_phone" value="<?php echo $mem1_phone ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputEmail4"><?php echo $mem2 ?>'s Email</label>
                <input type="email" class="form-control" id="mem2_email" name="mem2_email" value="<?php echo $mem2_email ?>">
                </div>
                <div class="form-group col-md-6">
                <label for="phone"><?php echo $mem2 ?>'s Contact</label>
                <input type="text" class="form-control" name="mem2_phone" id="mem2_phone" value="<?php echo $mem2_phone ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputEmail4"><?php echo $mem3 ?>'s Email</label>
                <input type="email" class="form-control" id="mem3_email" name="mem3_email" value="<?php echo $mem3_email ?>">
                </div>
                <div class="form-group col-md-6">
                <label for="phone"><?php echo $mem3 ?>'s Contact</label>
                <input type="text" class="form-control" name="mem3_phone" id="mem3_phone" value="<?php echo $mem3_phone ?>">
                </div>
            </div>
            <button type="submit" class="btn btn-primary signIn">Register Group</button>
        </form>
    </div>
</div>

  <!--Footer-->
  <div class="jumbotron text-center" style="margin-bottom:0">
    <p class="footer-data">Footer</p>
  </div>
  <!--Footer Ends-->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/groupRegistration.js"></script>
  <script src="../assets/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="../assets/bootstrap.min.js"></script>
</body>

</html>