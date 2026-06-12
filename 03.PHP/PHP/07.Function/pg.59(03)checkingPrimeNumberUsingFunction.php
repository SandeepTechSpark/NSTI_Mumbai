<!DOCTYPE html>
<html>
								<head>
												<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>checkingPrimeNumber</title>
								<link rel='stylesheet' href='../../../04.CSS/style.css'>
</head>
<body>
<h1>Checking Prime Number Using Function </h1>
<form method='post'>
				<label for='number'>Enter a Number : </label>
								<input type='number' id='number' name='number' placeholder='Enter a Number' required><br><br>
								<input class='btn-success' type='submit' value='Check Prime or Not'>
								<input class='btn-danger' type='reset' value='Clear'>
								</form>
					
																								<?php
												// To check if Button "Calculate Factorial" is clicked or not
												if($_SERVER['REQUEST_METHOD']=='POST') {
																// Input Handling from user
																$number = $_POST['number'];
				// Function to Check Prime or Not
								function isPrime($n){
												if($n<2) return false;
												for($i=2;$i<=sqrt($n);$i++){
																if($n%$i==0) return false;
												}
								return true;
}
echo "<br><hr>";
echo "<h3>Your Result is Fetched Successfully</h3><hr>";
if(isPrime($number)) echo "$number is a Prime Number.";
else echo "$number is not a Prime Number.";
}
?>
</body>
</html>