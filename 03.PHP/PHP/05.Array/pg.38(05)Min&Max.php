<!DOCTYPE html>
<html>
<head>
<title>Min&Max</title>
<link rel='stylesheet' href='../../../04.CSS/style.css'>
</head>
<body>
<h2>Program 05 : Min and Max in Array Elements</h2>
<form method='post'>
				Enter Numbers (Comma Saparated) : <input type='text' name='numbers' placeholder='Enter Your Array Elements' required>
				<input class='btn-success' type='submit' value='Find Min & Max'>
				</form>
								
								<?php
								// PHP coding----------------
								if($_SERVER['REQUEST_METHOD']=='POST') {
												$numbers = explode(',',$_POST['numbers']); // To convert String into array
												$numbers = array_map('trim',$numbers); 	// To remove Spaces
												$numbers = array_filter($numbers,'is_numeric'); // To remove Empty Values... ,,
if(!empty($numbers)) {
												$max = max($numbers); // to Find Max Element from the Array
												$min = min($numbers); 	// to Find Min Element from the Array
								// Display Results : 
				echo "<h3>Array Elements : </h3>";
foreach ($numbers as $num) echo $num." "; // implode - to show comma Separated
echo "<br><br>Max Element : $max"."<br>";
echo "<br>Min Element : $min";
}else{ echo "<p style='color:red>Please! Enter valid Numbers</p>";
																}
								}
?>
</body>
</html>