<!DOCTYPE html>
<html lang="en">
<head>
     <title>PossitiveNegativeOrZero</title>
</head>
<body>
    <hr><h2>Check The Given Number is Possitive, Negative or Zero </h2><hr>
    <form method="post">
        Enter any number to be checked : 
        <input type="number" name="num" placeholder="Enter a number">
        <input type="submit" name="submit" value="submit">
    </form>
        <?php
        if(isset($_POST[('submit')])){
        $num = $_POST[('num')];
            echo "<hr>";
            echo "Your Entered Number is : <b>" . $num."</b><hr>";
            if($num>0) echo  "<h4>Given Number is Possitive</h4><hr>";
             else if ($num<0) echo "<h4>Given Number is Negative</h4><hr>";
              else  echo "<h4>Given Number is Zero</h4><hr>";
        }
             ?>
</body>
</html>