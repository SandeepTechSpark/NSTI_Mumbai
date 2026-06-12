<!DOCTYPE html>
<html lang='en'>
<head> 
				<title>primeNumbersBetweenLimits</title>
<link rel='stylesheet' href='style.css'>
</head>
<body>
<h1>Prime Numbers between Two Limits </h1>
<form method='post'>
								<label class='form-label'for='flimit'>Enter Your First Limit : </label>
								<input class='form-input' type='number' id='flimit' name='flimit' placeholder='Enter First Limit' required><br><br>
								<label class='form-label' for='slimit'>Enter Your Second Limit : </label>
								<input class='form-input' type='number' id='slimit' name='slimit' placeholder='Enter Second Limit' required><br><br>
												<div>
												<input class='btn-success'type='submit' value='Find Prime Numbers'> 
												<input class='btn-danger' type='reset' value='Cancel'>
												</div>
												</form>
																
																<?php
																// to Chech that the Button Find Prime Numbers is clicked or not
																if(	$_SERVER['REQUEST_METHOD']=='POST') {
																				// Input Handling 
																				$flimit = $_POST['flimit']; // First Limit Input From User
																				$slimit = $_POST['slimit']; // Second Limit Input From User
				// Process to Find all Prime Numbers between two Limits.... 
												echo "<h3><mark>Prime Numbers are : </mark></h3>";
				for($i=$flimit;$i<=$slimit;$i++) {
								$num = $i;
								// 0 aur 1 is not Prime Numbers ..... to Filter this
								if($num<2) continue; // function continue to skip 0 and 1
								
								$j = 2;
								$isPrime = true;
								while($j<$num) {
												if($num%$j == 0) {
																$isPrime = false;
																break; // whenever a new  facter founded, To Stop loop quickly
												}$j++;
								}
								if($isPrime == true) echo $num;
				}
}
?>
</body>
										</html>						