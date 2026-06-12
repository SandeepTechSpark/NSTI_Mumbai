<!DOCTYPE html>
<html>
<head>
								<title>LinerSearch</title>
<link rel='stylesheet' href='../../../04.CSS/style.css'>
</head>
<body>
				<h2>Liner Search In Array</h2>
<form method='post'>
				Enter Numbers (Comma Separated) : 
				<input type='text' name='numbers' placeholder='example : 0,1,2,3,...' required> <br><br>
				Enter Element to Search : 
				<input type='number' name='search' placeholder='Enter Element to be Searched' required><br><br>
				<input class='btn-success' type='submit' value='search'>
</form>
				
<?php
				echo '<br><hr>';
//Check if Search Button Clicked 
				if($_SERVER['REQUEST_METHOD']=='POST') {
								//-------- 01. Input Handling from user ---------
								$numbers = explode(',',$_POST['numbers']); // to convert into Array and Remove Commas
								$numbers = array_map('trim',$numbers); // To remove Spaces
								$search = $_POST['search'];
//----- 02. Process to Search Element
echo '<h3>Your Result is fetched successfully  : </h3>';
if(in_array($search,$numbers)) echo "$search is founded in the array.";
else echo "$search is not founded in the array.";
				}
?>
</body>
<hr>
</html>