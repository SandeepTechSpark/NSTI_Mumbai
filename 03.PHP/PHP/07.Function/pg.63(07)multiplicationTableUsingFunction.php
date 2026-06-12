<!DOCTYPE html>
<html>
<head>
												<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tableOfNumberUsingFunction</title>
<link rel='stylesheet' href='../../../04.CSS/style.css'>
												
</head>
<body>
								<h1>Table of Number Using Function</h1>
<form method='post'>
				<label for='number'>Enter Your Number : </label>
								<input type='number' id='number' name='number' placeholder='Ex.10'required><br><br>
								<input class='btn-success' type='submit' value='Find Table'>
								<input class='btn-danger' type='reset' value='Clear'>
								</form>
												
												<?php
												if($_SERVER['REQUEST_METHOD']=='POST') {
																$number = $_POST['number'];
// function to Generate Table Series 
																function table($n){
																				for($i=1;$i<=10;$i++) {
																								echo "$n X $i  =  ".($n*$i)."<br>";
																				}
																}
 echo "<br><hr><h3>Multiplication Table of $number : </h3>";
				table($number);
}
?>
</body>
<hr>
</html>