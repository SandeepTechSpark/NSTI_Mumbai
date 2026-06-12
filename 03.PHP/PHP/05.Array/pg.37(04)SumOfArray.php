<!DOCTYPE html>
<html>
<head>
<title>SumOfArray</title>
<link rel='stylesheet' href='../../../04.CSS/style.css'>
</head>
<body>
<h2>Program 04 : Sum of Array Elements</h2>
<form method='post'>
				Enter Numbers (Comma Saparated) : <input type='text' name='numbers' placeholder='Input Example 1,2,3,4,...'required>
				<input class='btn-success' type='submit' value='Calculate'>
				</form>
								
								<?php
								// PHP coding----------------
								if($_SERVER['REQUEST_METHOD']=='POST') {
												$numbers = explode(',',$_POST['numbers']); // explode To convert String Into Array
												$numbers = array_map('trim',$numbers); 					// To Remove Spaces
$sum = array_sum($numbers);
												echo "<h3>Array Elements : </h3>";
foreach ($numbers as $num) {
				echo $num." ";
}
echo "<br><h3>Sum of Array Elements : $sum</h3>";
								}
?>
</body>
</html>