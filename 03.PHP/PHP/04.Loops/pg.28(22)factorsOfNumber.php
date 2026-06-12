<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factors</title>
</head>
<body>
    <center>
    <h1>Factors of the given Number</h1><hr>
    <form method="post" action="">
    <table border="2" cellspacing='4' cellpadding='8' style="background-color: #fabb4e;">
        <tr style="background-color: white;"><th colspan="2">Factors</th></tr>
        <tr><th><label for="user-inupt">Type your Number here   </label></th><th><input type="number" id="user-input" name="num" placeholder="Type your number here" required></th></tr>
    </table>
       <br> <input type="submit" name="submit" value="Find Factors"> &nbsp;&nbsp;&nbsp; <input type="reset" value="Clear"><hr>
       </form>
       </center>
       <p style="background-color: lightgreen; color:red; font-family:'Times New Roman', Times, serif; font-size:larger">
        <?php
        // Check karna ki submit botton click kiya ya nahi
        if(isset($_POST['submit'])) {
        // Now take input from user
        $num = $_POST['num'];
        
        // Process to Find all  Fators--- using Loop
        echo "The factors of $num are : ";
        for($i=1;$i<=$num;$i++) {
            if($num%$i==0){
                echo $i;
                if($i<$num) echo " , ";
            }
        }
        }
        ?>
       </p>
</body>
<hr>
</html>