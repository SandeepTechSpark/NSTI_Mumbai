<?php
echo "<h2>Example : 01.Check Word in String<hr></h2>";
$str='Welcome to PHP';
if(preg_match("/PHP/",$str)) echo "Match Found";
else echo "No Match";
echo "<hr><br>";
?>
<?php
echo "<h2>Example : 02.Validate Only Numbers<hr></h2>";
$num = '1234567';
if(preg_match("/^[0-9]+$/",$num)) echo"Valid Number";
else echo "Invalid";
echo "<hr><br>";
?>
