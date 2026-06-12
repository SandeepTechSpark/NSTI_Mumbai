<!DOCTYPE html>
<html>
<head>
												<title>mergeTwoArrays</title>
				<link rel='stylesheet' href='../../../04.CSS/style.css'>
</head>
<body>
<h1>Merge Two Arrays Elements</h1>
				<form method='post'>
								
								Enter First Array Elements (Comma Separated) : 
								<input class='form-input' type='text' name='fnames' placeholder='Example : 0,1,2,3,......' required><br><br>
								Enter Second Array Elements (Comma Separated) : 
								<input class='form-input'type='text' name='snames' placeholder='Example : 0,1,2,3,......' required><br><br>
								<input Class='btn-success' type='submit' value='Merge Both Arrays'>
								</form>
												<hr>
												<?php
												// To check the Botton Merge Bothh Arrays is clicked or not?
												if($_SERVER['REQUEST_METHOD']=='POST') {
																// Input Handling from User
																$farray = $_POST['fnames']; // First Array Elements
																$sarray = $_POST['snames']; // Second Array Elements
																$farray = explode(',',$farray);// To convert in Array
																$farray = array_map('trim',$farray); // To remove Spaces
																$sarray = explode(',',$sarray);// To convert in Array
																$sarray = array_map('trim',$sarray); // To remove Spaces
// Process to Merge Both Arrays
												$merged = array_merge($farray,$sarray); // both Arrays has been merged
												echo "<h3>After Merge Array Elements :</h3>";
												foreach ($merged as $num) echo $num." ";
												}
												?>
												</body>
<hr>
												</html>