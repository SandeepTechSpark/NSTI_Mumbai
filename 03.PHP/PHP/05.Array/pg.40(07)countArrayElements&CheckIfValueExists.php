<!DOCTYPE html>
<html>
<head>
												<title>elementCounting&Finding</title>
								<link rel='stylesheet' href='../../../04.CSS/style.css'>
</head>
<body>
<h2>Array Elements Counting & Checking if Value Exists</h2>
				<form method='post'> 
								
								Enter Array Elements (Comma Separated) : 
								<input type='text' name='fruits' placeholder='Input Example : ( Ajay,Vijay...)' required> <br><br>
								<label for='search'>Enter Search Element :</label> 
								<input type='text' name='search' id='search' placeholder='Enter Search Element' required><br><br> 
								<input class='btn-success' type='submit' value='Count & Check'>
								</form>
												<hr>
												<?php
												// To check the Button "Count & Check" is clicked or not
												if($_SERVER['REQUEST_METHOD']=='POST') {
																// Input handling from User
																$fruits = $_POST['fruits']; // Array Elements
																$fruits = explode(',',$fruits); // To covert elements in Array 
																$fruits = array_map('trim',$fruits); // To remove spaces
																																// Function to convert the Array Elements in Proper Case
																$fruits = array_map(function($fruit){
																				return ucwords(strtolower($fruit));
																},$fruits);
																$search = $_POST['search']; // Searching Element input handling
																$search = ucwords(strtolower($search)); // to Convert into Proper Case
				// Display Original Array
				echo "<h3>Original Array : </h3>";
foreach($fruits as $fruit) echo $fruit." ";
// Process to count & Checking if Value Exist 
 echo "<hr><h4>Total No.of Elements in Array : </h4>".count($fruits)."<hr>";
if (in_array("$search",$fruits)) echo "$search is available in the Array.";
else echo "$search is not available in the Array.";
												}
												?>
</body>
<hr>
</html>