<?php
$server='localhost';
$username='root';
$pw="";
$db="bloodbank";

	$conn= new mysqli($server, $username, $pw, $db);

	if ($conn->connect_error){
		die("connection failed :" .$conn->connect_error);
	}
?>