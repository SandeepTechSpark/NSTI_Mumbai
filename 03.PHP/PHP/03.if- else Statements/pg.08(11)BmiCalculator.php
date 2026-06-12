<!DOCTYPE html>
<html lang="en">
<head>
    <title>BmiCalculator</title>
<link rel='stylesheet' href='../../../04.CSS/style.css'>
</head>
<body>
    <hr><h2>BMI Calculator </h2><hr>
    <form method="post">
        Enter Your Height       : <input type="number" name="height" placeholder="Enter your Height in cm"><br><br>
        Enter Your Weight       : <input type="number" name="weight" placeholder="Enter you Weight in Kg"><br><hr>
        <input class='btn-success' type="submit" name="bmi" value="Calculate Your BMI">  <input class='btn-danger' type='reset' name='reset' value='Clear'>  <hr>
</pre>
    </form>
        <?php
        echo"<pre><br><br>";
        if(isset($_POST['bmi'])) {
        $h=$_POST[('height')];
        $w=$_POST[('weight')];
        echo "<hr>";
            $bmi =  round($w/(($h*$h)/10000),2);
            echo "Height : ".$h." Cm    "."||     Weight : ".$w." Kg    "."||     BMI Score : " .$bmi."    <hr>";
           
            echo "<b><br>Your Health Status : </b>";
if($bmi<18.5) echo "You are Under Weight!";
            else if ($bmi>=18.5 && $bmi<25) echo " You are Normal";
            else if ($bmi>=25 && $bmi<30) echo " You are Over Weight";
            else echo "<br>You are Obesity!";
        echo"</pre>";}
        ?>
        <hr>
</body>
</html>