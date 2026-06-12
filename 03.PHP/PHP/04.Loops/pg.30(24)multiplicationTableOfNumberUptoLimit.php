<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>table</title>
</head>
<body>
  <h1 style='background-color:aqua;'>Multiplication Table of Number upto limit</h1>
  <form method="post" action=''>
    <table style='background-color:lightyellow; font-family:arial;' border='2' cellspacing='2' cellpadding='9'>
      <tr><th colspan="2">Multiplication Table upto limit</th></tr>
      <tr><td><label for="num">Enter Your Number</label></td><td><input type="number" id="num" name="num" placeholder="Type your number here" required=""</td></tr><hr>
          <tr><td><label for="limit">Table Limit Upto</label></td><td><input type="number" id="limit" name="limit" placeholder="Enter the Table Multiplication Limit" required=""</td></tr>
    </table><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" name="find_multiplication" value="Find Multiplication"> &nbsp; <input type="reset" value="Clear">
  </form>
  				<hr>
  				<p style='color:red; background-color:aqua;'><mark>Table of the Given Number :<br></mark>
  				<?php
  				// check karna ki botton click kiya hai ya nahi
  				if(isset($_POST['find_multiplication'])) {
  								// form se data lena
  								$num=$_POST['num'];
												$limit=$_POST['limit'];
// process to calculate the given number table
for($i=1;$i<=$limit;$i++) {
				$result = $num*$i;
				echo"$num X $i = $result<br>";
}
  				}
?>
</p>
</body>
  				<hr>
</html>