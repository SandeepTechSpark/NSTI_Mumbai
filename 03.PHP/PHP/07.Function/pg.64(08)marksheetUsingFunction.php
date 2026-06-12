<!DOCTYPE html>
<html>
<head>
												<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>marksheetUsingFunction</title>
<link rel='stylesheet' href='../../../04.CSS/style.css'>
												
</head>
<body>
								<h1>Trainee Marksheet (Using Function)</h1>
<form method='post'>
				<label for='marks'>Enter Marks of 5 Subjects (Comma Separated out of 100) : </label>
								<input type='text' id='marks' number='marks' placeholder='Enter 5 Subjects Marks' required><br><br>
								<input class='btn-success' type='submit' value='Generate Marksheet'>
								</form>
												
												<?php
												if($_SERVER['REQUEST_METHOD']=='POST') {
																$marks = explode(',',$_POST['marks']);
								$marks = array_map('trim',$marks);
				// Function to Calculate Total Marks
								function totalMarks($arr) {return array_sum($arr);}
				// Function to Calculate Percentage
								function percentage($arr) {return (array_sum($arr))/(count($arr))*100;}
				// Function to Find Grade
								function grade($percent){
												if($percent>=90) return "A+";
												else if($percent>=80) return "A";
																else if($percent>=70) return "B+";
																				else if($percent>=60) return "B";
																								else if($percent>=50) return "C+";
																												else if($percent>=40) return "C";
																																else return "D";
								}
// Functions Calling One by One
								$tot = totalMarks($marks);
								$per = percentage($marks);
								$grade = grade($per);

// Display Output 
echo "<br><hr><h2>Marksheet is fetched Successfully<hr></h3>";
echo "<h3>Total Marks : $tot<hr</h3>";
echo "<h3>Percentage : ". round($per,2)."%<hr></h3>";
echo "<h3>Grade : $grade<hr></h3>";

// Check Fail or Pass Status :
foreach ($marks as $m) {
				if($m<40){
								echo "<p style='color:red;'><mark>Your Status :</mark> Fail</p>";
								exit;
				} else echo "<mark>Your Status :</mark> Pass";
}
												}
?>
</body>
<hr>
</html>