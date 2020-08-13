<?php
  include 'backend/conn.php';
  include 'faculty_header.php';
  include 'backend/get_data.php';
  $faculty=getfacultydetails($userLoggedIn);
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
      <?php  echo $faculty['name'];?>
    </div>
    <nav class="navbar navbar-expand-lg primary_color navbar-dark">
      <a class="navbar-brand" href="#"><span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <a href="backend/logout.php" class='mx-4'><button type="button" class="btn btn-success">Logout</button></a>
    </div>
  </nav>
  <div>
  <div class="container mt-4">
      <div class="row">
       <?php
        
        $groups=array();
        $groups= (getgroups($userLoggedIn));
        foreach($groups as $groupname){
          $project=array();
          $project=(getprojects($groupname));
          $id=$project['id'];
          ?>

           <!-- card start  -->
        <a href="groupdetails.php?id=<?php echo $project['groupname'];?>">
          <div class="card-wrapper col-lg-4 col-md-6 col-xs-12">
            <div class="card">
              <div class="card-img-wrapper">
                <img class="card-img-top" src="../assets/images/group_avatar.png" alt="Card image cap">
              </div>
              <div class="card-body">
                <div class="card-title">
                  <p class="card-text"><b>Group Name: </b><?php echo $project['groupname']?></p>
                  <p class="card-text"><b>Project Name: </b><?php echo $project['project_name']?></p>
                  <p class="card-text"><b>Project Domain: </b><?php echo $project['domain']?></p>
                  <p class="card-text"><b>Project Status: </b><?php echo $project['status']?></p>
                </div>
                <div class="card-content">
                  <a href="groupdetails.php?id=<?php echo $project['groupname'];?>" class="btn btn-primary">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </a>
         <!-- card end   -->
         
          <?php

        }
        
      ?>
       
          
      </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
  </div>
        
</div>



<script src="js/index.js"></script>
<?php include '../templates/footer.php'; ?> 
