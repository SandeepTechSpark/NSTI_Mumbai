<!DOCTYPE html>
<html>
<head>
												<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reverseOfNumber</title>
<link rel='stylesheet' href='../../../04.CSS/style.css'>
												
</head>
<body>
								<h1>Reverse of Number Using Function</h1>
<form method='post'>
				<label for='number'>Enter Your Number : </label>
								<input type='number' id='number' name='number' placeholder='Enter a Number' required><br><br>
								<input class='btn-success' type='submit' value='Find Reverse'>
								<input class='btn-danger' type='reset' value='Clear'>
								</form>
												
												<?php
												if($_SERVER['REQUEST_METHOD']=='POST') {
																$number = $_POST['number'];
								// function to find reverse of Number
								function reverseNumber($n){
while($n>0){
				$rev = $rev*10+$n%10;
				$n = (int)($n/10);
} 
return $rev;
								}
echo "<br><hr><h2>Your Result Fetched Successfully</h2><br>";
echo "<hr><h3>Reverse form of the Number (".$number.") is ".reverseNumber($number).".</h3><hr>";
												}
?>
</body>
</html>