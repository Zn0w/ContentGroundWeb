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
				echo "<p>Please, login in order to: 
				create  content on this forum, starr discussions, enter communities an more!</p>";
			}
			else
			{
				echo "Hello, " . $_COOKIE["userlogin"] . " !";
			}
		?>
	</body>	
</html>