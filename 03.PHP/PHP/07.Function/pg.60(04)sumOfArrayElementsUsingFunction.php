<!DOCTYPE html>
<html>
								<head>
																<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sumOfArrayUsigFunction</title>
								<link rel='stylesheet' href='../../../04.CSS/style.css'>
				</head>
<body>
<h1>Sum of Array Elements Using Function</h1>
				<form method='post'>
								<label for='numbers'>Enter Array Elements (Comma Separated) : </label>
												<input type='text' id='numbers' name='numbers' placeholder='e.g. 2,3,4,5,.....' required><br><br>
												<input class='btn-success' type='submit' value='Sum of Array Elements'><br><br>
												</form>
																
																<?php
																if($_SERVER['REQUEST_METHOD']=='POST'){
																				$arr = explode(',',$_POST['numbers']);
																				$arr = array_map('trim',$arr);
								// Function to find Sum of Array Elements
												function sumArray($arr){
																echo "<h3>Original Array : ";
																foreach($arr as $num) echo $num.",";
																$sum = 0;
																foreach($arr as $num){
																				$sum += $num;
																}
																return $sum;
												}
echo "<h2><br>Your Result Fetched Successfully</h2><hr><br>";
echo "<hr><h3>Sum of Array : ".sumArray($arr);
																}
?>
</body>
<hr>
</html>