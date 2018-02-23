<?php
	include_once "includes/dbconnect.php";
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
		$user_login = $_POST["login"];
		$user_password = $_POST["password"];

		$sql_get_user = "select * from users";/* where login = '$user_login'";*/
		$result = mysqli_query($db_connection, $sql_get_user);

		while ($row = mysqli_fetch_assoc($result))
+		{
+			echo $row["login"] . "<br>";
+		}

		if (!mysqli_num_rows($result))
		{
			echo "<h2>Sorry, a user with this login does not exist.</h2>";
		}
		else if (mysqli_fetch_assoc($result)["password"] != $user_password)
		{
			echo "<h2>Entered password is wrong.</h2>";
		}
		else
		{
			echo mysqli_num_rows($result);
			$user_data = mysqli_fetch_assoc($result);
			
			echo $user_data["name"];
		}

		mysli_close($db_connection);
	}
?>