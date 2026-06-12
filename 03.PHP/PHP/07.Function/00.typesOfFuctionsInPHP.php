<!-- ================================= Type of Functions in PHP ======================================= -->
 <?php
// A) User Defined-Functions

        // -------------------------- Example 01 : function without parameters --------------------------
function greet()
{
    echo "Hello, Welcome to PHP!";
}
greet(); // call the function
echo "<br><br><br>";
// ----------------------------------- Example 02 : function with Parameters --------------------------------
function add($a,$b) {
    $sum = $a+$b;
    echo "Sum of $a and $b = $sum";
}
add(5,10); // Call the function
echo "<br><br><br>";
// ---------------------------------- Example 03 : function with return Value --------------------------------
function multiply($a,$b){
    return $a*$b;
}
$result = multiply(5,6); // call the function & also Store returned Value
echo "Multiplication Result : ".$result;
echo "<br><br><br>";


// B) Built-in Functions 

        // ------------------------------- Example : Length Counting of a Word ---------------------------------
$name = "Rahul";
echo "Length of Name is ".strlen($name); //strlen()is a built-in function

echo "<br><br><br>";
// C) Recursive Functions

        // ------------------------------- Example : Factorial Using Recursion ---------------------------------
function factorial($n) {
    if($n<=1)return 1;
    else return $n*factorial($n-1);
}
$n=5;
echo "Factorial of $n is ".factorial($n);
echo "<br><br><br>";

// D) Function with Default Arguments

        // ------------------------------- Example : Default Value ---------------------------------------------
function greetUser($name = 'Guest'){
    echo "Hello, $name!";
}
greetUser();// Uses default Value
echo "<br>";
greetUser("Rahul");// Uses Provided Values
echo "<br><br><br>";

// E) Function with Variable Number of Arguments

        // ------------------------------- Example : Variable Number -------------------------------------------
function sumAll(...$numbers){
    $sum=0;
    foreach($numbers as $num) $sum += $num;
    return $sum;
} 
echo "Sum is ".sumAll(2,4,6,8);
echo "<br><br><br>";


// ========  Function call with the  static statement ========

function counter(){
    static $count = 0; // Initialized only once
    $count++;
    echo "Count : $count<br>";
}
counter();
counter();
counter();
echo "<br><br><br>";

// =============== Passing Arguments by Value [Default Behavior] ===========================
echo "<b>Passing Arguments By Value [Default Behavior]</b>";
function addFive($num){
    $num+=5;
    return $num;
}
$number =10;
$result = addFive($number);
echo "<br><br>".$number;
echo "<br>".$result;

echo "<br><br><br>";

// ============================= Passing Arguments By Reference ================================
echo "<b>Passing Arguments By Reference</b>";
function addSix(& $num) {
   return $num += 6;
} 
$number=10;
$result = addSix($number);
echo "<br><br>".$number;
echo "<br><br>".$result;

echo "<br><br><br>";

// ======================================== Testing for Function Existance =====================================
echo "<b>Testing for Function Existance : </b><br><br>";
if(function_exists("addSix")) echo "Function already defined/Exists.";
else {echo "Function Created!";
function addSix() {};
}

?>