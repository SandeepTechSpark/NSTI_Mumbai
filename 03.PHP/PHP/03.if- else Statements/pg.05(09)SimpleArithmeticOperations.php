<html>
<head><title> PHP Arithmetc Operation </title></head>
<body>
<hr><h3> PHP Arithmetc Operation </h3><hr>

<form method = "post">
    Enter First Number : 
        <input type="number" name="num1" required><br><br>
    Enter Second Numbre : 
        <input type="number" name="num2" required><br><br>
        <input type="submit" name="submit" value="calculate">
    </form>
        
        <?php
        
        if(isset($_POST['submit'])){
            
            $a=$_POST[("num1")];
            $b=$_POST[("num2")];
    echo "<hr>First Number is : ".$a."<br>";
    echo "Second Numeber is  : ".$b."<br><hr>";
        echo "<h4> Results :  </h4><hr>";
        echo " Addition : " . ($a+$b)."<br>";
        echo " Subtraction : " . ($a-$b)."<br>";
        echo " Multiplication : " . ($a*$b)."<br>";
if($b != 0) {
        echo " Division : " .round(($a/$b),2)."<br>";
        echo " Modulus : " . ($a%$b)."<br>";
    
    } 
else {echo " Division & Modulus can not be possible (can not be divided by zero)";
}
}
?>
    <hr>
</body>
</html>