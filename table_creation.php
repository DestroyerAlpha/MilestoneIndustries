<?php
	$db_hostname = "";
	$db_username = "";
	$db_password = "";
	$db_database = "Milestone_industry";

	$conn = new mysqli($db_hostname,$db_username,$db_password,$db_database);
	if($conn->connect_error)
		die("fatal Error");
	else
		echo 'hi connected';

	$query = "CREATE TABLE admins(
		Id int(20) AUTO_INCREMENT,
		Username varchar(128) NOT NULL,
		password varchar(128) NOT NULL,
		PRIMARY KEY(Id))";
	$res = mysqli_query($conn , $query);
	if (!$res)
		die ("Database access failed");
	else
		echo "\nhi table admins created";

	$query = "CREATE TABLE customers(
		Unique_Id int(30) AUTO_INCREMENT,
		Name varchar(128) NOT NULL,
		Username varchar(128) NOT NULL,
		Email varchar(128) NOT NULL,
		Mob_Number int(15) NOT NULL,
		Address varchar(128) NOT NULL,
		City varchar(128) NOT NULL,
		State varchar(128) NOT NULL,
		Pincode int(11) NOT NULL,
		Country varchar(128) NOT NULL,
		password varchar(128) NOT NULL,
		PRIMARY KEY(Unique_Id))";
	$res = mysqli_query($conn , $query);
	if (!$res)
		die ("Database access failed");
	else
		echo "\nhi table customers created";

	$query = "CREATE TABLE products(
		Product_Id int(30) AUTO_INCREMENT,
		Nickname varchar(128) NOT NULL,
		Name varchar(128) NOT NULL,
		Description varchar(256) NOT NULL,
		Quantity int(20) NOT NULL,
		Category varchar(128) NOT NULL,
		Company varchar(128) NOT NULL,
		Price varchar(128) NOT NULL,
		PRIMARY KEY(Product_Id))";
	$res = mysqli_query($conn , $query);
	if (!$res)
		die ("Database access failed");
	else
		echo "\nhi table products created";

	$query = "CREATE TABLE orders(
		Order_Id int(30) AUTO_INCREMENT,
		dateTime_order DATETIME NOT NULL,
		Products varchar(256) NOT NULL,
		Quantities int(20) NOT NULL,
		Total_price varchar(128) NOT NULL,
		Mode_of_Payment varchar(128) NOT NULL,
		username varchar(128) NOT NULL,
		Email varchar(128) NOT NULL,
		Mob_Number int(15) NOT NULL,
		Payment_successful int(2) NOT NULL,
		PRIMARY KEY(Order_Id))";
	$res = mysqli_query($conn , $query);
	if (!$res)
		die ("Database access failed");
	else
		echo "\nhi table orders created";

?>