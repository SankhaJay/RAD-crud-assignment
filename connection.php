<?php 
	require("constants.php");//all the variables are containing in this file
	$db = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);//setting up the connection
	if(!$db){
		die("Database connection failed: " .mysqli_error());
	}
	$db_select = mysqli_select_db($db,DB_NAME);//selecting database
	if(!$db_select){
		die("Database selection failed: ".mysqli_error());
	}
?>