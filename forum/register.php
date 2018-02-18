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

		echo "Login: " . $userlogin . "    Name: " . $username . "    Password: " . $userpassword;

		$result = mysqli_query($db_connection, "select * from users;");

		while ($row = mysqli_fetch_assoc($result))
		{
			echo $row["login"] . "<br>";
		}
	}
?>