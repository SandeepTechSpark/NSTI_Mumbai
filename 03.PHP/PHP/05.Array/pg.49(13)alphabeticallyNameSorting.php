<!DOCTYPE html>
<html>
<head>
												<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>alphabeticallyNameSorting</title>
<link rel='stylesheet' href='../../../04.CSS/style.css'>
												
</head>
<body>
								<h1>Alohabetically Name Sorting in Array</h1>
<form method='post'>
				<label for='names'>Enter Names(Comma Separated) : </label>
								<input type='text' id='names' name='names' placeholder='Example : Kaushal,Vinay,Lokesh ....' required><br><br>
								<input class='btn-success' type='submit' value='Sort Array Alphabetically'>
</form>
				
				<?php
				if($_SERVER['REQUEST_METHOD'] == 'POST') {
								$names = explode(',',$_POST['names']);
								$names = array_map('trim',$names);
								echo '<hr><h2>Original Array : </h2>';
foreach($names as $name) echo $name."<br>";

// Sort Array Elements Alphabetically
				sort($names);
echo "<hr><h3>Sorted Names (Alphabetically) : </h3>";
foreach($names as $name) echo $name."<br>";
}
?>
</body>
</html>