<?php
	include_once "includes/dbconnect.php";
	include_once "includes/userdata_cookies.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>ContentGroundForum Log in</title>
		<link rel = "stylesheet" href = "styles/mainstyle.css"/>
	</head>

	<body>
		<form method = "post">
			Your login: <br><br>
			<input type = "text" name = "login">
			<br><br><br><br>
			Your password: <br><br>
			<input type = "password" name = "password">
			<br><br><br><br>
			<input type = "submit" name = "submit" value = "Log in">
		</form>
	</body>
</html>

<?php
	if (!empty($_POST))
	{
		$db_connection = get_db_connection();
		
		$user_login = $_POST["login"];
		$user_password = $_POST["password"];

		$sql_get_user = "select * from users where login = '$user_login'";
		$result = mysqli_query($db_connection, $sql_get_user);

		$user_data = mysqli_fetch_assoc($result);

		if (!$user_data)
		{
			echo "<h2>Sorry, a user with this login does not exist.</h2>";
		}
		else if ($user_data["password"] != $user_password)
		{
			echo "<h2>Entered password is wrong.</h2>";
		}
		else
		{
			init_user_cookies($user_data["login"], $user_data["name"]);

			mysqli_close($db_connection);
			header("Location: index.php");

			exit;
		}

		mysqli_close($db_connection);
	}
?>