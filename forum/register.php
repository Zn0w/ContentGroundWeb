<?php
	include_once "includes/dbconnect.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>ContentGroundWeb Register</title>
		<link rel = "stylesheet" href = "styles/mainstyle.css"/>
	</head>

	<body>
		<form method = "post">
			Your login: <br><br>
			<input type = "text" name = "login">
			<br><br><br><br>
			Your name: <br><br>
			<input type = "text" name = "name">
			<br><br><br><br>
			Your password: <br><br>
			<input type = "password" name = "password">
			<br><br><br><br>
			<input type = "submit" name = "submit" value = "Register">
		</form>
	</body>
</html>

<?php
	if (!empty($_POST))
	{
		$userlogin = $_POST["login"];
		$username = $_POST["name"];
		$userpassword = $_POST["password"];

		$sql_find_login = "select * from users where login = '$userlogin';";
		$sql_find_name = "select * from users where login = '$username';";

		$result_login = mysqli_query($db_connection, $sql_find_login);
		$result_name = mysqli_query($db_connection, $sql_find_name);

		if (mysqli_num_rows($result_login) > 0 || mysqli_num_rows($result_name) > 0)
		{
			echo "<h2>Sorry, this login or name is already taken!</h2>";
		}
		else
		{
			$sql_update_query = "insert into users (login, name, password) values ('$userlogin', '$username', '$userpassword');";
			mysqli_query($db_connection, $sql_update_query);
		}
	}
?>