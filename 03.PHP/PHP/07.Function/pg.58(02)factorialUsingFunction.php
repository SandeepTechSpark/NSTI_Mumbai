<!DOCTYPE html>
<html>
<head>
												<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FactorialOfNumber</title>
<link rel='stylesheet' href='../../../04.CSS/style.css'>
												
</head>
<body>
								<h1>Factorial of Number Using Function</h1>
<form method='post'>
				<label for='number'>Enter a Number : </label>
								<input type='number' id='number' name='number' placeholder='Enter a Number' required><br><br>
								<input class='btn-success' type='submit' value='Calculate Factorial'>
								<input class='btn-danger' type='reset' value='Clear'>
								</form>
												
												<?php
												// To check if Button "Calculate Factorial" is clicked or not
												if($_SERVER['REQUEST_METHOD']=='POST') {
																// Input Handling from user
																$number = $_POST['number'];
								// Function to Calculate Factorial
								function factorial($n){
												$fact = 1;
if($n==0 || $n==1) return $fact;
else { 
				for($i=2;$i<=$n;$i++){ 
								$fact *= $i;}
}			
return $fact;
												}
echo "<h3>Your Result is Successfully fetched</h3>";
echo "Factorial of $number is ".factorial($number);
}
?>
</body>
</html>