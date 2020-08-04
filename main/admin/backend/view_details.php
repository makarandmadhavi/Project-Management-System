<?php
    include 'conn.php';
    
    $id = $_GET['id'];

    $stmt = $conn->prepare("SELECT * FROM project WHERE id = ?");
    echo $conn->error;
    $stmt->bind_param("s",$id);
    $stmt->execute();
    $result = $stmt->get_result();
   
    if($result){
        $row= $result->fetch_assoc();

        $stmt2 = $conn->prepare("SELECT * FROM groups WHERE groupname = ?");
        echo $conn->error;
        $stmt2->bind_param("s",$row['groupname']);
        $stmt2->execute();
        $result2 = $stmt2->get_result();

        if($result2){
            $row2 = $result2->fetch_assoc();

            $add = '../../student/uploads/'.$row['groupname']."/".$row['ppt'];
            
            $paper1 = '../../student/uploads/'.$row['groupname']."/".$row['research_paper_1'];

            $paper2 = '../../student/uploads/'.$row['groupname']."/".$row['research_paper_2'];

            $paper3 = '../../student/uploads/'.$row['groupname']."/".$row['research_paper_3'];
    
?>

<!-- View Start -->
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
            <div class="col-3">
                <a class="btn btn-primary" href="backend/view_pdf.php?address=<?=$paper3?>" target="_blank">View Paper 3</a>
            </div>
        </div>
    </div>
    <br>
    <div class="card-header">
        <h5>Evaluator Remarks</h5>
    </div>
    <div class="container grp_details">
    <div class="row">
            <div class="col-3">
                <h6 id="row_data1">No Remarks Yet.</h6>
            </div>
        </div> 
    </div>
<!-- View Ends -->

    <!-- <script>$('#projects_list').dataTable();</script> -->
    <?php
        } else {
            echo 'Error';
        }

    } else {
        echo 'Error';
    }
?>