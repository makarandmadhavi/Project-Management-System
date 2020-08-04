<?php
    include 'conn.php';
    $data = $_POST;
    $faculty = $data['faculty'];
    $groupname = $data['groupname'];
    $sql = "INSERT INTO `evalulators`(`id`, `groupname`, `facultyid`) VALUES ('$groupname','$groupname','$faculty') ON DUPLICATE KEY UPDATE groupname='$groupname' , facultyid = '$faculty'";
    $result = $conn->query($sql);
    if($result){
        $sql = "SELECT name FROM faculty WHERE sdrn='$faculty'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        echo $row['name'];
    }
    else {
        echo 'ERROR';
    }
?>