<!DOCTYPE html>
<html lang='en'>
<head> 
				<title>armestrongNumber</title>
<link rel='stylesheet' href='style.css'>
</head>
<body>
<h1>Checking the Given Number is Armestrong or Not </h1>
<form method='post'>
								<label class='form-label'for='user-input'>Enter Your Number : </label>
								<input class='form-input' type='number' id='user-input' name='num' placeholder='Enter Your Number Here' required><br><br>
												<div>
												<input class='btn-success'type='submit' value='Check Armestrong or Not'> 
												<input class='btn-danger' type='reset' value='Clear'>
												</div>
												</form>
																				<?php
																				if(isset($_POST['num'])) {
																				$num = $_POST['num'];
																$temp = $num; // take input from User
																$sum = 0; // Initialization of Sum
																$digits = strlen($num); // to Counting of the digits of the Given Number
								// Process to check the Given is Armestrong of Not using while loop
while($temp>0) {
								$lastDigit = $temp%10; // To take one by one digit
								$sum += pow($lastDigit,$digits); // The power value of every digit
								$temp = (int)($temp/10);  // Number ko chhota karne ke liye
}
//Display Output
  echo "<br><hr><br>";
				echo "<p style='color:green; font-size:1rem;'>Your Result is fetched Successfully : </p>";
// Camparision between Sum of all Powered Digits & Initial Num.........
if($num == $sum) echo "<hr>$num is an Armestrong Number.";
else echo "<hr>$num is not an Armestrong Number.";
}
?>
</body>
</html>