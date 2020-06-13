<?php
	$db_hostname = "";
	$db_username = "";
	$db_password = "";

	$conn = new mysqli($db_hostname,$db_username,$db_password);
	if($conn->connect_error)
		die("fatal Error");
	else
		echo 'hi connected';

	$query = "CREATE DATABASE Milestone_industry";
	$res = mysqli_query($conn , $query);
	if (!$res)
		die ("Database access failed");
	else
		echo "\nhi database created";
?>