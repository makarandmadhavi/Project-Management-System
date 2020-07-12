<?php  
include './config.php';

	session_start();
    $user = $_POST['user_id'];
    $user_type = $_POST['user_type'];
	
	$password = ($_POST['group_password']); 
	
	$check_database_query = $conn->query("SELECT * FROM login WHERE username='$user' AND password='$password' AND type='$user_type' ");
	$check_login_query = $check_database_query->num_rows;

	if($check_login_query == 1) {
		
		echo 1;
		$_SESSION["user"] = $user;
		
	}
	
	
		





?>