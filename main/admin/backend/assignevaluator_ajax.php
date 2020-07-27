<?php
    include 'conn.php';
    $data = $_POST;
    $faculty = $data['faculty'];
    $groupname = $data['groupname'];
    $sql = "INSERT INTO evalulators SET groupname='$groupname', facultyid='$faculty'";
    $result = $conn->query($sql);
    if($result){
        echo 'SUCCESS';
    }
?>