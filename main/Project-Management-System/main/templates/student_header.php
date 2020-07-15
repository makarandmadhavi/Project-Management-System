<?php  
include '../settings/conn.php';

$_SESSION['username'] = "f_1";


if (isset($_SESSION["username"])) {
	$userLoggedIn = $_SESSION['username'];
	$user_details_query = $conn->query("SELECT * FROM  groups WHERE groupname='$userLoggedIn'");
	$user = $user_details_query->fetch_assoc();
}
else {
	header("Location: ../index.php");
}

?>

