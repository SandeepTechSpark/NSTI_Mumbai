<?php
echo "<h1>Type of Array In PHP</h1>";
// Method 01 : Indexed Array
echo "<h3>01.Indexed Array : ";
$numbers=array(10,20,30);
echo "First Value : ".$numbers[0]."<br>";
								// -------- Printing all Elemetnts of Array using Loops
echo "<h4>Printing all Array Index Values using loop : <br>";
for($i=0;$i<count($numbers);$i++) {
				echo "Elements at Inddex $i : ".$numbers[$i]."<br>";
}


// Method 02 : Associative Array 
echo "<h3>02.Associative Array : <br>";
$arr = array(
"name"=>"Rahul",
"age"=>25,
"city"=>"Delhi"
);
echo "Name : ".$arr['name']."<br>";
echo "Age : ".$arr['age']."<br>";
echo "City : ".$arr['city']."<br>";

// Method 03 : Multidimensional Array
echo "<h3>03.Multidimensional Array : <br>";
$matrix = array(
array(1,2,3),
array(3,4,5),
array(7,8,9)
);
// -------- Printing all Elemetnts of Array using Loops
echo "<h3> 3X3 Matrix : </h3>";
for($i=0;$i<count($matrix);$i++) {
				for($j=0;$j<count($matrix[$i]);$j++) {
								echo $matrix[$i][$j]." ";
				} echo "<br>";
}
?>