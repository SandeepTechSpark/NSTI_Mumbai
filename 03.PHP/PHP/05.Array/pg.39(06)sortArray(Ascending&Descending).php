<!DOCTYPE html>
<html>
<head>
												<title>arraySorting</title>
				<link rel='stylesheet' href='../../../04.CSS/style.css'>
</head>
<body>
				<h2>Array Sorting (Ascending & Descending Order)</h2>
<form method='post'>
				Enter Numbers(Comma Separated) : 
				<input type='text' name='numbers' placeholder='Enter Numbers like 1,2,3,4,........' required>
				<input class='btn-success' type='submit' value='Sort Array'>
				</form>
								
								<?php
								// to check Sort Array button is clicked or not
								if($_SERVER['REQUEST_METHOD']=='POST') {
												// User input handling
												$numbers = explode(',',$_POST['numbers']); // To convert numbers in array
												$numbers = array_map('trim',$numbers); 					// To remove Spaces
												$number = array_filter($numbers,'is_numeric'); // To remove Empty Values
								// Process for Sorting Array Elements
				echo "<h3>Original Array : </h3>";
foreach($numbers as $num) echo $num." ";
if(!empty($numbers)) {
				
				// Ascending Order Array
				$ascending = $numbers; // Copy of the Original Array
				sort($ascending); // this copied Array In Ascending Order
				echo "<h3>Array in Ascending Order : </h3>";
				foreach($ascending as $value) echo $value." ";
				
				// Descending Order Array
				$descending = $numbers; // Copy of the Original Array
				rsort($descending); // This copied Array In Descending Order
				echo "<h3>Array in Descending Order : </h3>";
				foreach($descending as $value) echo $value." ";
}
								}
?>
</body>
</html>