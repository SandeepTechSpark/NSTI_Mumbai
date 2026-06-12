<?php
echo "<h2>Example : 01.Replace Word<hr></h2>";
$str = "I Like Java";
echo "Before Word Replace - $str<br><br>";
$newStr = preg_replace("/Java/","PHP",$str);
echo "After Word Replace - $newStr";
echo "<hr><br>";
?>

<?php
echo "<h2>Example : 02.Remove Number From String<hr></h2>";
$str = 'abc123xyz';
echo "Before Remove Numbers - $str<br><br>";
$result = preg_replace("/[0-9]/","",$str);
echo "After Remove Numbers - $result<br><br>";
echo "<hr><br>";
?>

<?php
echo "<h2>Example : 03.Replace Multiple Spaces with single Space only - <hr></h2>";
$str = "Hello World";
$result = preg_replace("/\.s+/","",$str);
echo $result;
echo "<hr><br>";
?>