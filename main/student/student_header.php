<?php  
include 'backend/conn.php';
session_start();
//$_SESSION['username'] = "s_1";


if (isset($_SESSION["username"])) {
	$userLoggedIn = $_SESSION['username'];
	$user_details_query = $conn->query("SELECT * FROM  groups WHERE groupname='$userLoggedIn'");
	$user = $user_details_query->fetch_assoc();
	$login_details_query = $conn->query("SELECT * FROM  `login` WHERE username='".$user['groupname']."' ");
	$login = $login_details_query->fetch_assoc();
	$member_details_query = $conn->query("SELECT `member1`, `member2`, `member3` FROM `groups` WHERE groupname='".$user['groupname']."' ");
	$member = $member_details_query->fetch_assoc();

	$project_details_query = $conn->query("SELECT *  FROM `project` WHERE groupname='$userLoggedIn' ");
	$flag=0;
	if($project_details_query->num_rows > 0)
	{
		$flag=1;
		$project = $project_details_query->fetch_assoc();
	}
}
else {
	header("Location: ../index.php");
}

?>

