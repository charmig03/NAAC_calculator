<!DOCTYPE html>
<html>
<head>
	<title>NAAC Calculator</title>
</head>
<body>
	<?php
		$teaching = $_POST['teaching'];
		$research = $_POST['research'];
		$consultancy = $_POST['consultancy'];
		$extension = $_POST['extension'];
		$infrastructure = $_POST['infrastructure'];
		$student_support = $_POST['student_support'];
		$diversity = $_POST['diversity'];
		$overall = $_POST['overall'];

		$total = $teaching + $research + $consultancy + $extension + $infrastructure + $student_support + $diversity + $overall;
		$percentage = ($total / 400) * 100;

		echo "<h2>Your NAAC total is: " . $total . "%</h2>";
		echo "<h2>Your NAAC score is: " . $percentage . "%</h2>";
	?>
</body>
</html>
