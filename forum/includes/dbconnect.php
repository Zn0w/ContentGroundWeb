<?php

$db_servername = "localhost";
$db_username = "root"; // default in xampp
$db_password = ""; // default in xampp
$db_name = "contentground_forum";

$db_connection = mysqli_connect(
	$db_servername, 
	$db_username, 
	$db_password, $db_name
);