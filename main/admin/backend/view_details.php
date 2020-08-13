

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




<div class="accordion" id="accordionExample">
    <div class="card">
    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        <div class="card-header" id="headingOne">
            <center>
                <h5>Group Details :-</h5>
            </center>
        </div>
    </button>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
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
        <hr> 
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
        <hr>
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
        <hr>
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
            </div>
        </div>
    </div>

    <div class="card">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <div class="card-header" id="headingThree">
                <center>
                    <h5>Abstract :- </h5>
                </center>
            </div>
        </button>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
            <div class="row px-3">
                        <h6 id="row_data1"><span id="data_span"><?=$row['abstract']?></span></h6>
                    </div>
                </div>
            </div>


    <div class="card">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <div class="card-header" id="headingTwo">
                <center>
                    <h5>Project Details :-</h5>
                </center>
            </div>
        </button>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
       
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
        <hr>
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
        <hr>
        <br>
                    <div class="row">
                        <div class="col-4">
                            <h6 id="row_data1">Research Papers Referred : </h6>
                        </div>
                        <div class="col-2">
                            <a class="btn btn-primary" href="backend/view_pdf.php?address=<?=$paper1?>" target="_blank">View Paper 1</a>
                        </div>
                        <div class="col-2">
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


    <div class="card">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            <div class="card-header" id="headingfour">
                <center>
                    <h5>Evaluator Remarks :-</h5> 
                </center>
            </div>
        </button>
        <div id="collapseFour" class="collapse" aria-labelledby="headingfour" data-parent="#accordionExample">
            <div class="card-body">
                <div class="container grp_details">
                    <div class="row">
                        <div class="col-3">
                        <h6 id="row_data1"><?=$row['comment']?></h6>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>




    <script>var back = 1;</script>
    <?php
        } else {
            echo 'Error';
        }

    } else {
        echo 'Error';
    }
?>
