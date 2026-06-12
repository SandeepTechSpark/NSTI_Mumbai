<?php
$a = 10;
$b = 8;
echo "Given Numbers :  A = $a , B = $b<br><br>";
echo "<b>";
// ============== Basic  Mathematical Operations ====================
echo "Addition : ".($a+$b)."<br>";
echo "Substraction : ".($a-$b)."<br>";
echo "Multiplication : ".($a*$b)."<br>";
echo "Division : ".($a/$b)."<br>";
echo "Modulus : ".($a%$b)."<br>";
// =================== Built in-Mathematical functions =====================
echo "Square Root of a : ".sqrt($a)."<br>";
echo "Power (a^b) : ".pow($a,$b)."<br>";
echo "Absolute Value : ".abs(-20)."<br>";
echo "Minimum : ".max($a,$b)."<br>";
echo "Minimum : ".min($a,$b)."<br>";
// ======================= Rounding Fuctions =================================
echo "Round Value : ".round(4.6)."<br>";
echo "Ceil Value : ".ceil(4.2)."<br>";
echo "Floor Value : ".floor(4.8)."<br>";
// ===================== Random Numbers between two Limits =====================
echo "Random Number : ".rand(1,100)."<br>";
echo "</b>";
?>