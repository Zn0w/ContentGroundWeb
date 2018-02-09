<body align = "center">
	Result: <br><br>

	<?php
		$num1 = $_POST["num1"];
		$num2 = $_POST["num2"];
		
		$op = $_POST["op"];

		if ($op == "add")
		{
			echo "<h2>" . ($num1 + $num2) . "</h2>";
		}
		else if ($op == "subtract")
		{
			echo "<h2>" . ($num1 - $num2) . "</h2>";
		}
		else if ($op == "multiply")
		{
			echo "<h2>" . ($num1 * $num2) . "</h2>";
		}
		else if ($op == "divide")
		{
			echo "<h2>" . ($num1 / $num2) . "</h2>";
		}
		else
		{
			echo "You haven't chosen an operation!";
		}
	?>

	<br><br>

	<a href = "../index.html">Go back to calculator</a>
</body>