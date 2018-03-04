<?php
	include_once "includes/user_data_db_access.php";
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

		<br><br><br><br>

		<a href = "index.php">Go back to homepage</a>
	</body>
</html>

<?php
	if (!empty($_POST))
	{
		$userlogin = $_POST["login"];
		$username = $_POST["name"];
		$userpassword = $_POST["password"];

		if (strlen($userlogin) < 3 || strpos($userlogin, " ") > 0)
		{
			echo "The user login is too short or has spaces.";
			exit;
		}
		else if (strlen($username) < 3)
		{
			echo "The user name is too short.";
			exit;
		}
		else if (strlen($userpassword) < 4 || strpos($userpassword, " ") > 0)
		{
			echo "The password is too short or has spaces";
			exit;
		}

		$result_login = get_user($userlogin, "login");
		$result_name = get_user($username, "name");

		if ($result_login != null || $result_name != null)
		{
			echo "<h2>Sorry, this login or name is already taken!</h2>";
		}
		else
		{
			$done = create_user($userlogin, $username, $userpassword);
			
			if (!$done)
			{
				echo "<h2>Sorry, the error occured while trying to register.</h2>";
			}
			else
			{
				header("Location: login.php");
				exit;
			}
		}
	}
?>