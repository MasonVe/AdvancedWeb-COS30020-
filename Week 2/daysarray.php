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
		$days = array("Sunday, ", "Monday, ", "Tuesday, ", "Wednesday, ",
		"Thursday, ", "Friday, ", "Saturday");
		
		echo "<p>The Days of the week in English are: ";
		foreach ($days as $value)
		{
			print_r($value);
		}
		
		$days = array ("Dimanche, ", "Lundi, ", "Mardi, ", "Mercredi, ",
		"Jeudi, ", "Vendredi, ", "Samedi");
		
		echo "<p>The Days of the week in French are: ";
		foreach ($days as $value)
		{
			print_r($value);
		}
	
	?>
</body>
</html>