<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="index.php"><i class="fas fa-qrcode"></i>Dashboard</a>
    <!--<a href="#"><i class="fa fa-address-book" aria-hidden="true"></i>Registered Group</a>
    <a href="#"><i class="fa fa-users" aria-hidden="true"></i>Group Allocation</a>
    <a href="#"><i class="far fa-question-circle"></i>Evaluator Allocation</a>
    <a href="#"><i class="fas fa-sliders-h"></i>Mentor Allocation</a>-->
    <?php
    $evaluator_query=$conn->query("SELECT id FROM  evalulators WHERE facultyid=$userLoggedIn"); 
    $evaluator = $evaluator_query->fetch_assoc();
    if ($evaluator){
        echo '<a href="evaluator.php"><i class="fas fa-sliders-h"></i>Evaluator</a>';
    }
    /*
    else{
        echo '<a href="#"><i class="fas fa-sliders-h">Evaluator</i></a>';
    }*/
    ?>
    <a href="backend/logout.php">Log out</a>
  </div>