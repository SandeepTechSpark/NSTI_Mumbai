<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
												<title>studentMarks</title>
<link rel='stylesheet' href='../../../04.CSS/style.css'>
</head>
<body>
<h1>Student Marks With Name - Using Associative Array</h1>
<form method='post'>
				Enter Students Names (Comma Separated) : 
				<input type='text' name='names' placeholder='example - Rahul,Abhay,Vinita,.......' required><br><br>
				Enter Marks (Comma Separated) :
				<input type='text' name='marks' placeholder='example - 87,76,91,.......' required><br><br>
				<input class='btn-success' type='submit' value='Show Result'> <input class='btn-danger' type='reset' value='Clear'>
				</form>
								
								<?php
								echo "<br><hr>";
								// ----- 01. Checking if button Show Result is Clicked ----------
								if($_SERVER['REQUEST_METHOD'] == 'POST') {
												// Input handling from User 
												$names = explode(',',$_POST['names']);
												$names = array_map('trim',$names);
												$names = array_map(function($name){
																return ucwords(strtolower($name));
												},$names);
												$marks = explode(',',$_POST['marks']);
												$marks = array_map('trim',$marks);
								// ----- 02. Process to Find Result --------------
								$students = array_combine($names,$marks);
								// ----- 03. Display Output ----------
				echo '<h3>Your Result is fetched successfully <br></h3>';
								echo '<b>Students Marks : <br></b>';
foreach ($students as $name => $mark) echo "$name : $mark<br>";
								}
?>
				</body>
</html>