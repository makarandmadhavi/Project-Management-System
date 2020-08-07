<?php
  include 'backend/conn.php';
  include 'faculty_header.php';
  include 'backend/get_evaluator_data.php';
  $groupname=$_GET['id'];
  $row=getprojects($groupname);
  $row2=getstudentnames($groupname);
  $add = '../../student/uploads/'.$row['groupname']."/".$row['ppt'];        
    $paper1 = '../../student/uploads/'.$row['groupname']."/".$row['research_paper_1'];
    $paper2 = '../../student/uploads/'.$row['groupname']."/".$row['research_paper_2'];
    $paper3 = '../../student/uploads/'.$row['groupname']."/".$row['research_paper_3'];

?>

<?php include '../templates/header_start.php'; ?>
<link rel="stylesheet" href="css/index.css">
<?php include '../templates/header_end.php'; ?>
<?php include 'sidenav.php';?> 

  <div id="main">
    <a href="http://www.dypatil.edu/mumbai/rait"><img src="../assets/images/Rait_new_logo_png.png" class="top_logo"></a>
    <div class="chip">
      <img src="../assets/images/img_avatar.png" alt="Person" width="96" height="96">
      <?php echo $userLoggedIn;?>
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
      </ul>
    </div>
  </nav>



  <div class=" container mt-4">
    <div class="card-wrapper">
        <div class="card">
        <div class="card-header">
        <h5>Group Details</h5>
    </div>
    <div class="container grp_details">
        <div class="row">
            <div class="col-3">
                <h6 id="row_data1">Group ID : </h6>
            </div>
            <div class="col-9">
                <h6 id="row_data1"><span id="data_span"><?=$row['groupname']?></span></h6>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3">
                <h6 id="row_data1">Member 1 : </h6>
            </div>
            <div class="col-9">
                <h6 id="row_data1"><span id="data_span"><?=$row2['member1']?></span></h6>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3">
                <h6 id="row_data1">Member 2 : </h6>
            </div>
            <div class="col-9">
                <h6 id="row_data1"><span id="data_span"><?=$row2['member2']?></span></h6>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3">
                <h6 id="row_data1">Member 3 : </h6>
            </div>
            <div class="col-9">
                <h6 id="row_data1"><span id="data_span"><?=$row2['member3']?></span></h6>
            </div>
        </div>
    </div>
    <div class="card-header">
        <h5>Project Details</h5>
    </div> 
    <div class="container grp_details">
        <div class="row">
            <div class="col-3">
                <h6 id="row_data1">Project Name : </h6>
            </div>
            <div class="col-9">
                <h6 id="row_data1"><span id="data_span"><?=$row['project_name']?></span></h6>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3">
                <h6 id="row_data1">Domain : </h6>
            </div>
            <div class="col-9">
                <h6 id="row_data1"><span id="data_span"><?=$row['domain']?></span></h6>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3">
                <h6 id="row_data1">Abstract : </h6>
            </div>
            <div class="col-9">
                <h6 id="row_data1"><span id="data_span"><?=$row['abstract']?></span></h6>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3">
                <h6 id="row_data1">Project Presentation : </h6>
            </div>
            <div class="col-9">
                <a class="btn btn-primary" href="backend/view_pdf.php?address=<?=$add?>" target="_blank">View Presentation</a>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-3">
                <h6 id="row_data1">Research Papers Referred : </h6>
            </div>
            <div class="col-3">
                <a class="btn btn-primary" href="backend/view_pdf.php?address=<?=$paper1?>" target="_blank">View Paper 1</a>
            </div>
            <div class="col-3">
                <a class="btn btn-primary" href="backend/view_pdf.php?address=<?=$paper2?>" target="_blank">View Paper 2</a>
            </div>
            <?php if($row['research_paper_3']!=""){
                ?>
                <div class="col-3">
                    <a class="btn btn-primary" href="backend/view_pdf.php?address=<?=$paper3?>" target="_blank">View Paper 3</a>
                </div>
           <?php }?>
            
        </div>
    </div>
    <br>
    
  
    </div>
    </div>
 




  
</div>
<script src="js/index.js"></script>
<?php include '../templates/footer.php'; ?>
