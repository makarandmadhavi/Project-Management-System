<?php
  include 'backend/conn.php';
  include 'faculty_header.php';
  include 'backend/get_data.php';
  $faculty=getfacultydetails($userLoggedIn);
  $status = array(0=>"Project Supervisor", 1=>"Evaluator and Project Supervisor");
?>

<?php include '../templates/header_start.php'; ?>
<link rel="stylesheet" href="css/index.css">
<?php include '../templates/header_end.php'; ?>
<?php include 'sidenav.php';?> 

  <div id="main">
    <a href="http://www.dypatil.edu/mumbai/rait"><img src="../assets/images/Rait_new_logo_png.png" class="top_logo"></a>
    <div class="chip">
      <img src="../assets/images/img_avatar.png" alt="Person" width="96" height="96">
      <?php echo $faculty['name'];?>
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
  
  <div class="main container my-3">
    <table class="table table-hover">
        
        <tbody>
 
            <tr>
                <td >Name</td>
                <td ><b><?php echo $faculty['name'];?></b></td>
                
            </tr>
            <tr>
                <td >Department</td>
                <td ><b><?php echo $faculty['dept_name'];?></b></td>
                
            </tr>
            <tr>
                <td >Email</td>
                <td ><b><?php echo $faculty['emailid'];?></b></td>
                
            </tr>
            <tr>
                <td >Domain</td>
                <td ><b><?php echo $faculty['domain'];?></b></td>
                
            </tr>
            <tr>
                <td >Role</td>
                <td ><b><?php echo $status[$faculty['isEvaluator']]?></b></td>
                
            </tr>
            <tr>
                <td >Evaluator Page</td>
                <td ><a href="evaluator.php" class="btn btn-primary">Evaluator</a></td>
                
            </tr>
            <tr>
                <td >Project Supervisor Page</td>
                <td ><a href="mentor.php" class="btn btn-primary">Project Supervisor</a></td>
            </tr>
            
            
            

            
                       
        </tbody>
    </table>
  
    </div><br>
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
<script src="js/index.js"></script>
<?php include '../templates/footer.php'; ?>
