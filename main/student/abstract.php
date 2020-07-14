<?php 
session_start();
include 'backend/config.php';
include 'header.php';

?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content=" width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="../assets/bootstrap.min.css">
  <link rel="stylesheet" href="css/starter.css">
  <link rel="stylesheet" href="css/abstract.css">
  <title>PMS</title>

</head>
<body>
  <!--Head and Navbar-->
  <div style="background:white;">
    <img src="../assets/images/Rait_new_logo_png.png" class="top_logo">
    <div class="chip">
      <img src="../assets/images/img_avatar.png" alt="Person" width="96" height="96">
      <?php echo $user['groupname'];?>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg primary_color navbar-dark ">
    <a class="navbar-brand" href="#">Rait</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link" href="studentdashboard.php">group detail <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="abstract.php">submit abstract</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="update_abstract.php">Update abstract</a>
        </li>
      </ul>
      
        <a href="backend/logout.php"><button class="btn btn-outline-success my-2 my-sm-0 search_btn" type="submit">Logout</button></a>
      
    </div>
  </nav>
  <!--Head and Navbar Ends-->
  <!--input-->
  <div class="container">
		<div class="d-flex justify-content-center form-box">
			<div class="user_card">
      
				<div class="d-flex justify-content-center">
        <h1>Abstract</h1>
       <?php
        $user = $_SESSION["user"];
        $result = $conn->query("Select groupname from project WHERE groupname='$user'");
        $check_login_query = $result->num_rows;
        if($check_login_query>0){
          echo'<script>alert("for resubmission go to update abstract page");</script>';
          header("Location: update_abstract.php");
      
        }
        ?>
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
              <select id="domain" name="domain" class="form-control">
                <option selected>Choose</option>
                <option>Machine Learning</option>
                <option>Internet OF Things</option>
              </select>
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
                    <input type="file" class="custom-file-input " name="ppt" id="file" onchange="return fileValidation()" Required placeholder="Upload the PPT in PDF format only*">
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
                <input type="file" class="custom-file-input " name="researchpaper_1" id="customFile"  Required>
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
                  <input type="file" class="custom-file-input " name="researchpaper_2" id="customFile"  Required>
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
                  <input type="file" class="custom-file-input " name="researchpaper_3" id="customFile"  Required>
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
<script> 
  function fileValidation() { 
    var fileInput =  
        document.getElementById('file'); 
      
    var filePath = fileInput.value; 
  
    // Allowing file type 
    var allowedExtensions =  
            /(\.pdf)$/i; 
      
    if (!allowedExtensions.exec(filePath)) { 
        alert('Invalid file type'); 
        fileInput.value = ''; 
        return false; 
    } 
  } 
  </script> 

  
  <!--Footer-->
  <!-- <div class="jumbotron text-center" style="margin-bottom:0">
    <p class="footer-data">Footer</p>
  </div> -->
  <!--Footer Ends-->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="../assets/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>

  <script src="../assets/bootstrap.min.js"></script>
  <script>
  $('.custom-file-input').on('change', function() { 
   let fileName = $(this).val().split('\\').pop(); 
   $(this).next('.custom-file-label').addClass("selected").html(fileName); 
});
  </script>
</body>

</html>