<?php
    include 'conn.php';
    $data = $_POST;
    $name = $data['name'];
    $email = $data['email'];
    $phone = $data['phone'];
    $domain = $data['domain'];
    $department = $data['department'];
    $sql = "INSERT INTO `faculty` (`id`, `name`, `email`, `domain`, `department`) VALUES (NULL, '$name', '$email', '$domain', '$department');";
    $result = $conn->query($sql);
    if($result){
        echo 'SUCCESS';
    }
?>