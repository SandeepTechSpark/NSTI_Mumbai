<!DOCTYPE html>
<html>
<head>
												<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>binarySearchInPHP</title>
<link rel='stylesheet' href='../../../04.CSS/style.css'>
												
</head>
<body>
								<h1>Binary Search In PHP</h1>
<form method='post'>
				<label for='elements'>Enter Array Elements(Comma Separated) : </label>
								<input type='text' id='elements' name='elements' placeholder='Array Elements e.g. 1,2,3,4,5 ....' required><br><br>
								<label for='search'>Enter Search Element : </label>
												<input type='number' id='search' name='search' placeholder='Search Element e.g. 5' required><br><br>
								<input class='btn-success' type='submit' value='Search'>
</form>
				
				<?php
				if($_SERVER['REQUEST_METHOD'] == 'POST') {
								$elements = explode(',',$_POST['elements']);
								$elements = array_map('trim',$elements);
								$elements = array_map('intval',$elements);
								// Display Original Array
								echo "<h3>Original Array : </h3>";
				foreach($elements as $element) echo $element. " ";
								// Display Sorted Array
								$sortedArray = $elements;
								sort($sortedArray);
								echo "<h3 style='color:blue;'>Sorted Array : </h3>";
								$search = $_POST['search'];
foreach($sortedArray as $value) echo $value." ";

// function to process Binary Search
								function binarySearch($arr,$n){
												$low = 0;
												$high = count($arr)-1;
												while($low<=$high){
																$mid = (int)(($low+$high)/2);
																if($arr[$mid]==$n) return $mid; // Element founded Return Index
																else if($arr[$mid]<$n) $low =$mid+1;
																				else $high = $mid-1;
												}
										return-1; // Element not Found		
								}
												$result = binarySearch($sortedArray,$search);
												if($result != -1) {
												echo "<hr><h3>Result : </h3>$search is found at index No. $result";
												} else echo "<hr><h3>Result : $search is not found in Array";
  }
?>
</body>
<hr>
</html>