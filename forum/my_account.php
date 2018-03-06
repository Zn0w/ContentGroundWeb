<?php
	include_once "includes/user_data_db_access.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<title>ContentGroundForum MyAccount</title>
		<link rel = "stylesheet" href = "styles/mainstyle.css"/>
	</head>

	<body>
		<a href = "index.php">Homepage</a>
		&nbsp; &nbsp; &nbsp; &nbsp;
		<a href = ""><strong>My account</strong></a>
		&nbsp; &nbsp; &nbsp; &nbsp;
		<a href = "">About</a>

		<br><br><br><br>

		<?php
			if (!isset($_COOKIE["userlogin"]) || !isset($_COOKIE["username"]))
			{
				echo "<h1>Sorry, you have to login or register to view your account page.</h1>";
				echo "<a href = 'login.php'>Log in</a> &nbsp; &nbsp; <a href = 'register.php'>Register</a>";
			}
			else
			{
				echo "<h1>" . $_COOKIE["username"] . " (" . $_COOKIE["userlogin"] . ")</h1>";
				$user_data = get_user($_COOKIE["userlogin"], "login");

				echo "<h1>Rating: " . $user_data["rating"] . "</h1>";
			}
		?>
	<body>
</html>