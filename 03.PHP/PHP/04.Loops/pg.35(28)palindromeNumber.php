<!DOCTYPE html>
<html lang='en'>
<head> 
				<title>palindromNumber</title>
<link rel='stylesheet' href='style.css'>
</head>
<body>
<h1>Checking the Given Number is Palindrome or Not </h1>
<form method='post'>
								<label class='form-label'for='user-input'>Enter Your Number : </label>
								<input class='form-input' type='number' id='user-input' name='num' placeholder='Enter Your Number Here' required><br><br>
												<div>
												<input class='btn-success'type='submit' value='Check Palindrome or Not'> 
												<input class='btn-danger' type='reset' value='Clear'>
												</div>
												</form>
																				<?php
																				if(isset($_POST['num'])) {
																				$num = $_POST['num'];
																$temp = $num; // take input from User
																$reverse = 0;
while($temp>0) {
																$lastDigit = $temp%10;
																$reverse = ($reverse*10)+$lastDigit;
																$temp = (int)($temp/10);
}
// Display Output.................
echo "<br><hr><br>";
echo "<p style='color:green; font-size:1rem;'>Your Result is fetched Successfully : <hr></p>";
if($num==$reverse) echo "The Given Number $num is Palindrome.";
else echo "The Given Number $num is not Palindrome.";
}
?>
</body>
</html>