<?php

include_once "dbconnect.php";

function get_user($user_login)
{
	$db_connection = get_db_connection();
	$user_data = null;

	if ($db_connection == false)
		return $user_data;

	$sql_get_user = "select * from users where login = '$user_login'";
	$result = mysqli_query($db_connection, $sql_get_user);

	$user_data = mysqli_fetch_assoc($result);

	mysqli_close($db_connection);
	return $user_data;
}