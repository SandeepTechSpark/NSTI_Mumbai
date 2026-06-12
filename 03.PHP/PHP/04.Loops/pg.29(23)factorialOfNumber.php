<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <center>
    <h1>Factorial of the given Number</h1><hr>
    <form method="post">
    <table border="2" cellspacing='4' cellpadding='8' style="width:70%; background-color: #82b7f3;">
        <tr style=" background-color: white; font-size:2rem;"><th colspan="2">Factorial</th></tr>
        <tr><th><label for="user-inupt">Type your Number here   </label></th><th><input style='font-size:1rem; border:1px; border-radius:2px;' type="number" id="user-input" name="num" placeholder="Type your number here" required></th></tr>
    </table>
       <br> <input type="submit" name="submit" value="Calculate Factorial"> &nbsp;&nbsp;&nbsp; <input type="reset" value="Clear"><hr>
       </form>
       </center>
       <p style="background-color: lightgreen; color:red; font-family:'Times New Roman', Times, serif; font-size:larger">
        <?php
        // Check karna ki submit botton click kiya ya nahi 
        if(isset($_POST['submit'])) {
        // Now take input from user
        $num = $_POST['num'];
        $fact=1;
        // Process to Calculate Fatorial --- using  For Loop

        for($i=1;$i<=$num;$i++) {
            $fact = $fact * $i;
            echo $i;
            if($i<$num) echo " x ";
        }
        echo " = ".$fact;
/*
								// Process to Calculate Fatorial --- using While Loop
												
												$abc=1;
while(0<$num){
    $abc = $abc*$num;
    
    if($num<$abc) echo " X ";
    echo $num;
    $num--;
} echo " = ".$abc; */
        }
        ?>
       </p>
</body>
<hr>
</html>