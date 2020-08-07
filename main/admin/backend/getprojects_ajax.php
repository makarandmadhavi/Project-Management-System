<?php
    include 'conn.php';
    include 'get_data.php';
    $data = $_POST;
    $groupname = $data['groupname'];
    //echo $groupname;
    $projects = getprojects($groupname); 
?>


<?php foreach ($projects as $project) { ?>
<div class="card">
    <div class="card-header d-flex justify-content-between" id="headingOne" type="button" data-toggle="collapse"
        data-target="#<?=$project['groupname']?>" aria-expanded="false" aria-controls="<?=$project['groupname']?>">
        <span><?=$project['groupname']?> - <?=$project['project_name']?></span>
        <span class='eval<?=$project['groupname']?>'> <?php $assignedevals = getgroupevaluators($project['groupname']); 
                          foreach ($assignedevals as $eval) {  ?>
            <?=$eval['name']?>
            <?php } ?> </span>
    </div>
    <div id="<?=$project['groupname']?>" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
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
                        <li class="list-group-item list-group-item-primary">Evaluator Assigned</li>
                        <?php $assignedevals = getgroupevaluators($project['groupname']); 
                          foreach ($assignedevals as $eval) {  ?>
                        <li class="list-group-item eval<?=$project['groupname']?>"><?=$eval['name']?></li>
                        <?php } ?>

                        <div class="input-group">
                            <select class="custom-select" id="select-<?=$project['groupname']?>">
                                <?php 
                          $evaluators = getevaluators();
                          foreach ($evaluators as $evaluator) {
                        ?>
                                <option value="<?=$evaluator['sdrn']?>"><?=$evaluator['name']?></option>
                                <?php } ?>
                            </select>
                            <div class="input-group-append">
                                <button class="btn btn-success" type="button"
                                    onclick="assign_evaluator(this,'<?=$project['groupname']?>')">Change
                                    Evaluator</button>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>

        </div>
    </div>

</div>
<?php } ?>