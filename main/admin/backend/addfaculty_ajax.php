<?php
    include 'conn.php';
    $data = $_POST;
    $name = $data['name'];
    $email = $data['email'];
    $phone = $data['phone'];
    $domain = $data['domain'];
    $department = $data['department'];

    $symbols=['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','1','2','3','4','5','6','7','8','9'];
    $key=$symbols[rand(0,25)];
    for($i=0;$i<5;$i++){
        $key=$key.$symbols[rand(0,34)];
    }
    $sql = "INSERT INTO `login` VALUES ('$email', '$key', 'faculty');";
    $result2 = $conn->query($sql);
    $result1 = false;
    if($result2){
        $sql = "INSERT INTO `faculty` ( `name`, `email`, `domain`, `department`) VALUES ( '$name', '$email', '$domain', '$department');";
        $result1 = $conn->query($sql);
    }
    

    if($result1 && $result2){
?>
<div class="card-header">
    Faculted Added
</div>

<ul class="list-group list-group-flush">
    <li class="list-group-item">Username: <?=$email?></li>
    <li class="list-group-item">Password: <?=$key?></li>
    <button onclick="window.location = ''" class="btn btn-primary">Back</button>
</ul>

<?php } else { ?>
<div class="card-header">
    ERROR
</div>

<ul class="list-group list-group-flush">
    <li class="list-group-item" style="color:red;">Mail already registered</li>
    <button onclick="window.location = ''" class="btn btn-primary">Back</button>
</ul>

<?php } ?>