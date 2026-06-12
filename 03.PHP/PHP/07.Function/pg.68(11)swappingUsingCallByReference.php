<?php
echo "<h2>Swapping Using Call by Reference </h2><hr>";
// => In Call by Reference, the original values will change also. (& - Ampersand)
function swap(&$a,&$b){
				$temp = $a;
				$a = $b;
				$b = $temp;
				echo "Inside Function : A = $a, B = $b\n<br><br>";
}
$x = 10;
$y = 20;
// Function calling with Arguments
swap($x,$y);
echo "Outside Function : X = $x, Y = $y\n";
?>