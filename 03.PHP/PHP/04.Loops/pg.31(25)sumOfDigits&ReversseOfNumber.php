<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>sum&Reverse</title>
				<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<style>
*																											{margin : 10px;padding:5px;} 
p																											{color:red; background-color:aqua;}
table																	{background-color:lightyellow; font-family:arial;}
h1																									{background-color:aqua;}
</style>
</head>
<body>
  <h1>Sum of Digits and Reverse of the Number</h1>
  <form method="post" action=''>
    <table border='2' cellspacing='2' cellpadding='9'>
      <tr><th colspan="2">Sum of Digits & Reverse</th></tr>
      <tr><td><label for="num">Enter Your Number</label></td><td><input class='input-group-text'type="number" id="num" name="num" placeholder="Type your number here" required=""></td></tr>
    </table><br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<input class='btn btn-success' type="submit" name="result" value="Find Result"> &nbsp; <input class='btn btn-danger' type="reset" value="Clear">
  </form>

<?php 
// Check karne ke liye ki Find Result Button Clicked hai ya nahi......................
  if(isset($_POST['result'])) {
    // Take input from user.........
    $num = $_POST['num'];
    $temp=$num;
    $sum=0;
    $rev=0;
    
     // Process for reverse of the given Number ..............
       while($temp>0) {
         $digit = $temp%10;           // to find the each last digit of the given number
         $rev = ($rev*10) + $digit;  // To do the reverse order ever digits
         $sum = $sum + $digit;     // To add all the digits
         $temp = (int)($temp/10); // To reduce the last digit every time cerculation of loop
       }
        echo "<p><mark>Reverse of the $num is</mark>= ".$rev."</p><hr>";
        echo "<p><mark>Sum of the all Digits of $num is</mark>= ".$sum."</P><hr>";
      }
  
?>
  				</body>
  				</html>