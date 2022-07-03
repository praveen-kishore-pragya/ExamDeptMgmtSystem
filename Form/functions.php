<?php
session_start();

function db_connect() {
 // db connection variable
 	global $conn;
	$db_server = "localhost";
	$username = "root";
	$password = "";
	$db_name = "college";
	// create a connection
	$conn = mysqli_connect($db_server, $username, $password, $db_name);


	
	if(!$conn)
	{
		die("Connection not established");
	}
	else
	{
		//echo "connection estsblished successfully";
	}
}
?>
	