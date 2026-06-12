<?php
echo "<h2>Swapping Using Call by Value </h2><hr>";
// => In Call by value, only copies are passed, so original values do not change.
function swap($a,$b){
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