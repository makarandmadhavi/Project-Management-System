<?php

  include 'backend/conn.php';
  include 'student_header.php';
  $result = $conn->query("Select groupname from project WHERE groupname='".$user['groupname']."'");
  $check_login_query = $result->num_rows;
  if($check_login_query>0){
      
    header("Location: update_abstract.php");
  }

 
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../assets/bootstrap.min.css">
  <link rel="stylesheet" href="css/starter.css">  
  <link rel="stylesheet" href="css/abstract.css">
  <link rel="stylesheet" href="css/studentdashboard.css">
  
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>

  <title>RAIT</title>
</head>
<body> 
  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="index.php"><i class="fas fa-qrcode"></i>Dashboard</a>
    <a href="abstract.php"><i class="fa fa-graduation-cap" aria-hidden="true" >Create Abstract</i></a>
    <a href="update_abstract.php"><i class="fa fa-graduation-cap" aria-hidden="true" >Update Abstract</i></a>
    
    <a href="backend/logout.php">Log out</a>
  </div>

  <div id="main">
    <a href="http://www.dypatil.edu/mumbai/rait"><img src="../assets/images/Rait_new_logo_png.png" class="top_logo"></a>
  <!--<img src="./Rait_new_logo_png.png" class="top_logo">-->
    <div class="chip">
      <img src="../assets/images/img_avatar.png" alt="Person" width="96" height="96">
      <?php echo $user['groupname'];?>
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
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li> -->
        <li class="nav-item">
        <button type="button" class="btn btn-success" data-target="#myModal" data-toggle="modal">Change Password</button>
        </li>
        
      </ul>
      <a href="backend/logout.php"><button type="button" class="btn btn-success">Logout</button></a>
      
    </div>
  </nav>
  <div>
    
    <div class="change_password">
      <!-- Button HTML (to Trigger Modal) -->
      <!-- <button type="button" class="btn btn-lg btn-primary" data-target="#myModal" data-toggle="modal">Change Password</button> -->

      <!-- Modal HTML -->
      <div id="myModal" class="modal fade" data-backdrop="static" tabindex="-1">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title">Change Password</h5>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <form  action="backend/changepassword_backend.php" class= "changepassowrdform" method="POST">
                      <div class="form-group row">
                        <label for="new_password" class="change_password_text">Password</label>
                        <input type="password" name="new_password" id="new_password"" Required class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
                        <label for="confirm_password" class="change_password_text">Password</label>
                        <input type="password" name="confirm_password" Required  id="confirm_password" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
                        <small class="text-muted mx-4 mt-2"> At least 8 characters long. - At least 1 uppercase, AND at least 1 lowercase - At least 1 digit AND at least 1 alphanumeric.</small>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" id="confirmbutton" data-dismiss="modal" >Cancel</button>
                        <button type="submit" class="btn btn-primary" onclick="return password_validate()" id="confirmbutton" name="submit">Save password</button>
                      </div>
                    </form>
                  </div>
                  
              </div>
          </div>
      </div>
  </div>
    <!--input-->
    <div class="container">
		<div class="d-flex justify-content-center form-box">
			<div class="user_card">
      
				<div class="d-flex justify-content-center">
        <h1>Abstract</h1>
       <!-- <?php
        // $user = $_SESSION["username"];
        
        //}
        ?> -->
				</div>
				<div class="container">
          <form  action="backend/abstract_backend.php" method="POST" enctype="multipart/form-data" style>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label>Project Name</label>
              <input type="text" class="form-control" name="projectname" placeholder="Project Name" Required>
            </div>
            <div class="form-group col-md-6">
              <label>Domain</label>
              <select id="domain" name="domain" onchange='Checkdomain(this.value);' class="form-control">
                <option selected>Choose</option>
                <option>Machine Learning</option>
                <option>Internet OF Things</option>
                <option value="others">others</option>

              </select>
              <input type="text" name="domain"  id="otherdomain" style='display:none;'  placeholder="Enter the other topic"/><br>
            </div>
          </div>
          <div class="form-group">
            <label>Project Abstract</label>
            <textarea class="form-control" rows="3" name="abstract" Required></textarea>
          </div>

            <br>
            <div class="row">
              <div class="col-2 text-dark text-success text-right " id="label_title">
                PPT
              </div>
              <div class="col-10">
              <div class="custom-file">
                    <input type="file" class="custom-file-input " name="ppt" id="file" onchange="return fileValidation()" placeholder="Upload the PPT in PDF format only*">
                    <label class="custom-file-label" for="customFile">Upload the PPT in PDF format only*</label>
                  </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-2 text-dark text-success text-right"  id="label_title">
                Research paper 1:
              </div>
              <div class="col-10">
                <div class="custom-file">
                <input type="file" class="custom-file-input " name="researchpaper_1" id="customFile" Required >
                <label class="custom-file-label" for="customFile">Choose First research paper</label>
              </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-2 text-dark text-success text-right" id="label_title">
                Research paper 2:
              </div>
              <div class="col-10 ">
                <div class="custom-file">
                  <input type="file" class="custom-file-input " name="researchpaper_2" id="customFile" Required >
                  <label class="custom-file-label" for="customFile">Choose Second research paper</label>
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-2 text-dark text-success text-right " id="label_title">
                Research paper 3:
              </div>
              <div class="col-10 ">
                <div class="custom-file">
                  <input type="file" class="custom-file-input " name="researchpaper_3" id="customFile"  >
                  <label class="custom-file-label" for="customFile">Choose Third research paper</label>
                </div>
              </div>
            </div>
            <br>
						<div>
					    <center><button type="submit" name="submit" class="btn login_btn" id="submit">Submit</button></center>
				    </div>
					</form>
				</div>
				
				 
			</div>
		</div>
  </div>
  </div>
  <!--Footer-->
  <div class="jumbotron text-center" style="margin-bottom:0">
    <p class="footer-data">Footer</p>
  </div>
  <!--Footer Ends-->

  <script src="js/studentdashboard.js"></script>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="../assets/bootstrap.min.js"></script>
  <?php
    //echo $login['change_password'];
   if($login['change_password']==0)
   {
     ?> 
     <script>
      
      $(document).ready(function(){
        $("#myModal").modal('show');
      });
    </script>
    
    <?php
   }
  ?>
  <script src="js/abstract.js"></script>


   
</body>
</html> 
