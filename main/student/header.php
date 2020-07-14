<?php  



if (isset($_SESSION["user"])) {
	$userLoggedIn = $_SESSION['user'];
	$user_details_query = $conn->query("SELECT * FROM  groups WHERE groupname='$userLoggedIn'");
	$user = $user_details_query->fetch_assoc();
}
else {
	header("Location: index.php");
}

?>

