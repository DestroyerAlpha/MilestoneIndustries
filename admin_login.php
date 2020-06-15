<?php
	
	session_start();

	if(!isset($_POST['submit_d'])){
		header('location:admin_login_page.php');
	}

	require_once 'database_credential.php';

	$conn = new mysqli($db_hostname,$db_username,$db_password,$db_database);
	if($conn->connect_error)
		die("fatal Error");

	if(isset($_POST['submit_d']))
	{
		$admin_username = $_POST['admin_username'];
		$admin_password = $_POST['admin_password'];

		if($admin_username==NULL ||  $admin_password==NULL){
	        echo '<script>alert("Dont leave any blank space !!")</script>';
	        include 'admin_login_page.php';
	        die();
	    }

	    if($admin_username=='" or ""="' ||  $admin_password=='" or ""="'){
	        echo '<script>alert("Dont leave any blank space !!")</script>';
	        include 'admin_login_page.php';
	        die();
	    }
    	$sql = "select * from admins where username ='$admin_username' && password = '$admin_password'";
		$res = mysqli_query($conn , $sql);

		if(mysqli_num_rows($res) != 1){
			//if username / password are not correct , redirect to main page (login.php)
			echo "<h1>The username/password you have entered is incorrect </h1>";
			die("<h4> Please click here to <a href = 'admin_login_page.php' > try agian </h4>");
		}
		else 
			echo "<script>alert('successful login')</script>";
	}

	
?>