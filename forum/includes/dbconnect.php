<?php

function get_db_connection()
{
	$db_connection = mysqli_connect(
		"localhost",
		"root",
		"",
		"contentground_forum"
	);
	
	return $db_connection;
}