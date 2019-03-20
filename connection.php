<?php 
	require("constants.php");
	$db = mysqli_connect(DB_SERVER,DB_USER,DB_PASS);
	if(!$db){
		die("Database connection failed: " .mysqli_error());
	}
	$db_select = mysqli_select_db($db,DB_NAME);
	if(!$db_select){
		die("Database selection failed: ".mysqli_error());
	}
?>