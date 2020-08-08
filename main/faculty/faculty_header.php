<?php  
include 'backend/conn.php';
session_start();



if (!isset($_SESSION["username"]) && ($_SESSION["logintype"]!="faculty")) {
    header("Location: ../index.php");
}
else{
    $userLoggedIn = $_SESSION['username'];
    
}



?>

