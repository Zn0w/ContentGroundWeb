<?php

include_once "dbconnect.php";

function get_user($user_info, $key)
{
	$db_connection = get_db_connection();

	if ($db_connection == false)
		return null;

	$sql_get_user = null;
	if ($key == "login")
		$sql_get_user = "select * from users where login = '$user_info'";
	else if ($key == "name")
		$sql_get_user = "select * from users where name = '$user_info'";
	else
		return null;

	$result = mysqli_query($db_connection, $sql_get_user);

	$user_data = mysqli_fetch_assoc($result);

	mysqli_close($db_connection);
	return $user_data;
}

function create_user($userlogin, $username, $userpassword)
{
	$db_connection = get_db_connection();

	if ($db_connection == false)
		return false;
	
	$sql_update_query = "insert into users (login, name, password) values (
		'$userlogin', 
		'$username', 
		'$userpassword'
	);";
	mysqli_query($db_connection, $sql_update_query);

	mysqli_close($db_connection);

	return true;
}