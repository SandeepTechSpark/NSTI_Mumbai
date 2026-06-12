<!DOCTYPE html>
<html>
<head>
												<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bmiCalculatorUsingFunction</title>
<link rel='stylesheet' href='../../../04.CSS/style.css'>
												
</head>
<body>
								<h1>BMI Calculator Using Function</h1>
<form method='post'>
				<label for='w'>Enter Your Weight (in Kg)</label>
								<input type='number' id='w' name='w' placeholder='Example- 50' reruqired>
								
				<label for='h'>Enter Your Height (in cm)</label>
								<input type='number' id='h' name='h' placeholder='Example- 100' required>
								
												<input class='btn-success' type='submit' value='Calculate BMI'>
												
												<?php
												if($_SERVER['REQUEST_METHOD']=='POST') {
																//Input handling from User
																$weight = $_POST['w'];
																$height = $_POST['h'];
								// function to Calculate BMI Score
								function calculateBmi($w,$h){
																return ($w/(($h*$h)/10000));
								}
								function bmiCategory($bmi){
												if($bmi<18.5) return "Under Weight!";
												else if($bmi<25) return "Normal Weight";
																else if($bmi<30) return "Over Weight";
																				else return "Obesity";
								}
$bmi = calculateBmi($weight,$height);
// Display Output
								echo "<br><hr><h2>Your Result fectched Successfully</h2>";
								echo "<hr><h3>Your BMI is ".round($bmi,2)." and You are ".bmiCategory($bmi);
												}
								?>
												</body>
												</html>