<!DOCTYPE html>
<html>
<head>
												<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bubbleSortInPHP</title>
<link rel='stylesheet' href='../../../04.CSS/style.css'>
												
</head>
<body>
								<h1>Bubble Sort In PHP</h1>
<form method='post'>
				<label for='numbers'>Enter Numbers(Comma Separated) : </label>
								<input type='text' id='numbers' name='numbers' placeholder='Example : 1,2,3,4,5 ....' required><br><br>
								<input class='btn-success' type='submit' value='Sort'>
</form>
				
				<?php
				if($_SERVER['REQUEST_METHOD'] == 'POST') {
								$numbers = explode(',',$_POST['numbers']);
								$numbers = array_map('trim',$numbers);
								echo '<h3>Original Array : </h3>';
foreach($numbers as $num) echo $num." ";

// Function to Bubble Sorting
								function bubbleSort($arr){
												$n  = count($arr);
												for($i=0;$i<$n-1;$i++){
																for($j=0;$j<$n-$i-1;$j++){
																				if($arr[$j]>$arr[$j+1]){
																								// Swap Elements
																								$temp = $arr[$j];
																								$arr[$j] = $arr[$j+1];
																								$arr[$j+1] = $temp;
																								
																				}
																}
												}
												return $arr;
								}
												// Sort Array By Function Calling
												$sortedArray = bubbleSort($numbers);
												
												// Display Output :
												echo "<hr><h3>Sorted Array (Ascending Order) : </h3>";
												foreach($sortedArray as $value) echo $value." ";
								
}
?>
</body>
<hr>
</html>