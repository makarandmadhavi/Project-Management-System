<?php 
session_start(); 
    include 'conn.php';
    if(isset($_POST["submit"]))
    {
        if($_POST['new_password']!=$_POST['confirm_password'])
        {   
            header("Location: ../index.php");
        }
        else
        {
            $newpassword = ($_POST['new_password']); 
            $confirmpassword = ($_POST['confirm_password']);  
            $check_database_query = $conn->query("UPDATE `login` SET `password`='$newpassword',`change_password`=1  WHERE `username`='".$_SESSION["username"]."' AND `type`='student' ");
            header("Location: ../index.php");
        }     
    }



?>