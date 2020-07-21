<?php
    include 'conn.php';
    $data = $_POST;
    $username = $data['username'];
    $password = $data['password'];
    $sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);
    if($result){
        $row = $result->fetch_assoc();
        if($row){
            session_start();
            $_SESSION['username'] = $row['username'];
            $_SESSION['logintype'] = $row['type'];
            echo $row['type'];
        }
        else {
            echo 'incorrect';
        }
    }
    else {
        echo 'incorrect';
    }
?>