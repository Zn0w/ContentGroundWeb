<!DOCTYPE html>
<html>
	<head>
		<title>ContentGroundForum Homepage</title>
	</head>
	
	<body align = "center">
		<h1>Welcome to the Content Ground Forum homepage!</h1>

		<a href = ""><strong>Homepage</strong></a>
		&nbsp; &nbsp; &nbsp; &nbsp;
		<a href = "">My account</a>
		&nbsp; &nbsp; &nbsp; &nbsp;
		<a href = "">About</a>

		<br>

		<?php
			if (!isset($_COOKIE["userlogin"]))
			{
				echo "<p>Please, login or register in order to: 
				create  content on this forum, start discussions, enter communities an more!</p>";

				echo "<br>";

				echo "<a href = 'login.php'>Log in</a> &nbsp; &nbsp; <a href = 'register.php'>Register</a>";
			}
			else
			{
				echo "Hello, " . $_COOKIE["userlogin"] . " !";
			}
		?>
	</body>	
</html>