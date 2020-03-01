<?php
	require_once 'conn.php';
	
	if(ISSET($_POST['save'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		
		$query = $conn->query("SELECT * FROM `user` WHERE `username` = '$username'");
		$rows = $query->num_rows;
		
		if($rows > 0){
			echo "<span class='text-danger'>Username is not available</span>";
		}
		
		mysqli_query($conn, "INSERT INTO `user` VALUES('', '$username', '$password', '$firstname', '$lastname')") or die(mysqli_error());
		
	}
?>