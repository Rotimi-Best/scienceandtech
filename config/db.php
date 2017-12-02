<?php
//	Create Connection
/*
 database to check connection
*/
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	$database = mysqli_select_db($conn, 'feedback');
	// Check connection
	if(mysqli_connect_errno()){
		// Connection Failed
		echo 'Failed to connect to Mysql'. mysqli_connect_errno();
	}