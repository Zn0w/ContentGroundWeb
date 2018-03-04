<?php
	include_once "includes/userdata_cookies.php";
	include_once "includes/user_data_db_access.php";
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

		<br><br><br><br>

		<a href = "index.php">Go back to homepage</a>
	</body>
</html>

<?php
	if (!empty($_POST))
	{
		$user_login = $_POST["login"];
		$user_password = $_POST["password"];

		$user_data = get_user($user_login, "login");

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
			header("Location: index.php");

			exit;
		}
	}
?>