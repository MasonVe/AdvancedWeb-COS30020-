<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text.html; charset=utf-8"/>
	<meta name="description" content="Web Programming: Lab 2"/>
	<meta name="keywords" content="Web Programming"/>
	<title>Using Variables, Arrays, and Operators</title>
	<meta name="author" content="Mason Veljan">
</head>
<body>
	<h1>Web Programming - Lab 2</h1>
	<?php
		$num = 12;
		
		if (is_numeric($num))
		{
			$value = round($num);
			if($value % 2 == 0)
			{
				echo "<p>The variable $num contains an even number</p>";
			}
			else
			{
				echo "<p>The variable $num contains an odd number</p>";
			}
		}
	
	?>
</body>
</html>