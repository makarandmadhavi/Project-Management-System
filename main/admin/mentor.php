<?php include 'admin_header.php'; ?>
<?php include '../templates/header_start.php'; ?>

<!-- Custom css files go here -->
<link rel="stylesheet" href="css/Admin.css">
<link rel="stylesheet" href="css/faculty.css">
<?php include '../templates/header_end.php'; ?>

<?php include 'sidenav.php'; ?>

<div id="main">
  <a href="http://www.dypatil.edu/mumbai/rait"><img src="../assets/images/Rait_new_logo_png.png" class="top_logo"></a>
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
        <li onclick="window.location=''" class="nav-item nav-link" id="home">
          Home
        </li>
        <!-- <li class="nav-item nav-link" onclick="changetab(this.id)" id="">
          Allocation list
        </li> -->


      </ul>
      <a href="logout.php" class='mx-4'><button type="button" class="btn btn-success">Logout</button></a>
    </div>
  </nav>
  <div id="main-content" class="container">
    <div class="container">
      <br>
      <div class="row">
        <div class="col-sm-9">
          <h1 class="text-center "><b>Project Supervisor Allocation</b></h1>
        </div>
        <div class="col-sm-3">
          <div class="input-group mb-3">
            <input type="text" id="search" oninput="searchproject(this.value)" class="form-control"
              placeholder="search">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" onclick="searchproject(search.value)" type="button"
                id="button-addon2">Search</button>
            </div>
          </div>
        </div>
      </div>
      <?php include 'backend/get_data.php';
      $projects = getprojects("%"); 
      
      ?>
      <div class="accordion" id="accordionExample">
        <?php foreach ($projects as $project) { ?>
        <div class="card">
          <div class="card-header d-flex justify-content-between" id="headingOne" type="button" data-toggle="collapse"
            data-target="#<?=$project['groupname']?>" aria-expanded="false" aria-controls="<?=$project['groupname']?>">
            <span><?=$project['groupname']?> - <?=$project['project_name']?> --><?=$project['domain']?> </span>
            <span class='eval<?=$project['groupname']?>'> <?php $assignedevals = getgroupmentors($project['groupname']); 
                          foreach ($assignedevals as $eval) {  ?>
              <?=$eval['name']?>
              <?php } ?> </span>
          </div>
          <div id="<?=$project['groupname']?>" class="collapse" aria-labelledby="headingOne"
            data-parent="#accordionExample">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item list-group-item-primary">Group Members</li>
                    <li class="list-group-item"><?=$project['member1']?></li>
                    <li class="list-group-item"><?=$project['member2']?></li>
                    <li class="list-group-item"><?=$project['member3']?></li>
                  </ul>
                </div>
                <div class="col-sm-6">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item list-group-item-primary">Project Supervisor Assigned</li>
                    <?php $assignedevals = getgroupmentors($project['groupname']); 
                          foreach ($assignedevals as $eval) {  ?>
                    <li class="list-group-item eval<?=$project['groupname']?>"><?=$eval['name']?></li>
                    <?php } ?>

                    <div class="input-group">
                      <select class="custom-select" id="select-<?=$project['groupname']?>">
                        <?php 
                          $evaluators = getmentors();
                          foreach ($evaluators as $evaluator) {
                        ?>
                        <option value="<?=$evaluator['sdrn']?>"><?=$evaluator['name']?> --><?=$evaluator['domain']?></option>
                        <?php } ?>
                      </select>
                      <div class="input-group-append">
                        <button class="btn btn-success" type="button"
                          onclick="assign_mentor(this,'<?=$project['groupname']?>')">Change Project Supervisor</button>
                      </div>
                    </div>
                  </ul>
                </div>
              </div>

            </div>
          </div>

        </div>
        <?php } ?>



      </div>
    </div>

  </div>


</div>

</div>

<script src="js/mentor.js"></script>
<script src="js/admin.js"></script>

<?php include '../templates/footer.php'; ?>